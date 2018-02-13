<?php


class SpecialCaseHelper
{
    /**
     * Proxy URL - used to check if link is already proxyfied
     * @var string
     */
    protected $proxyAddress = '';

    /**
     * Javascript escaped chars
     * @var array
     */
    protected $jsEscapedChars = ['\x3c', '\x3e', '\x3d', '\x22', '\x27', '\x26'];

    /**
     * Javascript normal chars
     * @var array
     */
    protected $jsNormalChars = ['<', '>', '=', '"', "'", '&'];

    /**
     * Extracts parts of the strig by string delimiters. Case-insenzitive search for delimiters.
     *
     * @param  string $stringToExtract
     * @param  string $startString
     * @param  string $endString
     * @param  boolean $verbose (optional, default is true)
     * @return false for fail, or string or array
     */
    protected function getStringBetweenDelimiters($stringToExtract, $startString, $endString = '', $verbose = true)
    {
        return getStringBetweenDelimiters($stringToExtract, $startString, $endString, $verbose);
    }

    /**
     * Splits given string by delimiters and returns the inner string
     *
     * @param $stringToExtract
     * @param $startString
     * @param $endString
     * @return bool|string
     */
    protected function getInnerString($stringToExtract, $startString, $endString)
    {
        return getStringBetweenDelimiters($stringToExtract, $startString, $endString, false);
    }

    /**
     * Get the proxy url for a simple URL
     *
     * @param  string $proxyUrl
     * @param  array $proxyParams
     * @param  string $proxyUrlParameter
     * @param  string $url (to be proxyfied)
     * @return string
     */
    protected function getProxyfiedUrl($proxyUrl, $proxyParams, $proxyUrlParameter, $url)
    {
        // check if found url is relative
        if (strpos($url, "//") === 0) {
            $url = "http:" . $url;
        }

        // attach the proxy URL parameter
        return $this->getProxyBase($proxyUrl, $proxyParams, $proxyUrlParameter) . urlencode($url);
    }

    /**
     * Get the proxy url for a Js variable
     *
     * @param  string $proxyUrl
     * @param  array $proxyParams
     * @param  string $proxyUrlParameter
     * @param  string $jsVar (to be proxyfied)
     * @return string The proxy base as a string and the *encoded* js variable
     */
    protected function getProxyfiedJsVar($proxyUrl, $proxyParams, $proxyUrlParameter, $jsVar)
    {
        // attach the proxy URL parameter
        return '"' . $this->getProxyBase($proxyUrl, $proxyParams, $proxyUrlParameter) . '"' . '+encodeURIComponent(' . $jsVar . ')';
    }

    /**
     * Get the proxy url for a *complex* Js variable
     *
     * @deprecated
     * @param  string $proxyUrl
     * @param  array $proxyParams
     * @param  string $proxyUrlParameter
     * @param  string $jsVar (to be proxyfied)
     * @return string The proxy base as a string and the *encoded* js variable
     */
    protected function getProxyfiedDocWrite($proxyUrl, $proxyParams, $proxyUrlParameter, $jsVar)
    {
        // correct missing protocol
        if (strpos($jsVar, '//') === 0) {
            $jsVar = 'http:' . $jsVar;
        }

        $proxyfiedJsVar = "');"; // close the original document.write
        $proxyfiedJsVar .= 'document.write(';
        $proxyfiedJsVar .= '"' . $this->getProxyBase($proxyUrl, $proxyParams, $proxyUrlParameter) . '"';
        $proxyfiedJsVar .= "+encodeURIComponent('" . $jsVar . "')";
        $proxyfiedJsVar .= ');';
        $proxyfiedJsVar .= "document.write('"; // start the new document.write

        return $proxyfiedJsVar;
    }

    /**
     * Get the proxy url for a Js URL
     *
     * @deprecated
     * @param  string $proxyUrl
     * @param  array $proxyParams
     * @param  string $proxyUrlParameter
     * @param  string $jsVar (to be proxyfied)
     * @return string The proxy base as a string and the *encoded* js variable
     */
    protected function getProxyfiedJsUrl($proxyUrl, $proxyParams, $proxyUrlParameter, $jsVar)
    {
        // attach the proxy URL parameter
        return '"+ "' . $this->getProxyBase($proxyUrl, $proxyParams, $proxyUrlParameter) . '"' . '+encodeURIComponent("' . $jsVar . '") + "';
    }

    /**
     * [getProxyfBase description]
     *
     * @param  [type] $proxyUrl
     * @param  [type] $proxyParams
     * @param  [type] $proxyUrlParameter
     * @return string
     */
    protected function getProxyBase($proxyUrl, $proxyParams, $proxyUrlParameter)
    {
        // prepare proxy
        $proxyBaseUrl = $proxyUrl . '?';
        if (!empty($proxyParams) && is_array($proxyParams)) {
            // make sure we do not have the same parameter twice
            if (isset($proxyParams[$proxyUrlParameter])) {
                unset($proxyParams[$proxyUrlParameter]);
            }

            // attach parameters
            if (!empty($proxyParams)) {
                $proxyBaseUrl .= http_build_query($proxyParams) . '&';
            }
        }
        // attach the proxy URL parameter
        return $proxyBaseUrl . $proxyUrlParameter . '=';
    }

    /**
     * Check if the current url contains our proxy address.
     *
     * @param  string $stringUrl
     * @return boolean
     */
    protected function checkAlreadyProxfied($stringUrl)
    {
        if (empty($this->proxyAddress)) {
            $ci =& get_instance();
            $this->proxyAddress = $ci->config->item('proxy_url');
        }

        // if starts with the proxy address
        $return = stripos($stringUrl, $this->proxyAddress) !== false;

        logging(__FUNCTION__ . ' - ' . $stringUrl . ' - ' . $this->proxyAddress . ' - ' . (int)$return . '<br>');

        return $return;
    }

    /**
     * Get original (current, unproxified) folder path with optional trailing slash
     *
     * @param string $proxyUrlParameter
     * @param string $trailingSlash
     * @return string
     */
    protected function getCurrentPath($proxyUrlParameter, $trailingSlash = "/")
    {
        // return early if GET param is not set
        if (!isset($_GET[$proxyUrlParameter])) {
            return $trailingSlash;
        }

        // remove any GET params in original URL
        if (strpos($_GET[$proxyUrlParameter], '?') !== false) {
            $_GET[$proxyUrlParameter] = strtok($_GET[$proxyUrlParameter], '?');
        }

        $url = pathinfo($_GET[$proxyUrlParameter]);
        return $url['dirname'] . $trailingSlash;
    }

    /**
     * Extracts the domain and the path of the URL given as parameter.
     *
     * @param  string $url
     * @return array
     */
    protected function extractDomainPath($url)
    {
        $parsedUrl = parse_url($url);

        // extract domain
        $domain = 'http://';
        $domain .= isset($parsedUrl['host']) ? $parsedUrl['host'] : '';
        $domain .= isset($parsedUrl['port']) ? ':' . $parsedUrl['port'] : '';

        // remove GET params if present
        $pos = strpos($url, '?');
        if ($pos !== false) {
            $url = substr($url, 0, $pos);
        }

        // extract path
        $path = pathinfo($url, PATHINFO_DIRNAME);
        if (strpos($path, '/') !== strlen($path) - 1) {
            $path .= '/';
        }

        return [
            'domain' => $domain,
            'path' => $path,
        ];
    }

    /**
     * Escapes characters: < > = " into \x3c \x3e \x3d \x22
     *
     * @param  string $string
     * @return string
     * @deprecated
     */
    protected function jsEscape($string)
    {
        str_replace($this->jsEscapedChars, $this->jsEscapedChars, $string);
        return $string;
    }

    /**
     * Escapes characters: <> / = " ...
     *
     * @param  string $string
     * @return string
     * @deprecated
     */
    protected function jsUnescape($string)
    {
        str_replace($this->jsEscapedChars, $this->jsEscapedChars, $string);
        return $string;
    }

    /**
     * Validate javascript variable with extra proxy validation
     *
     * @param $potentialJsVar mixed
     * @return bool
     */
    protected function validJsVar($potentialJsVar)
    {
        if (empty($potentialJsVar)) {
            return false;
        }
        // not valid if already proxyfied
        if ($this->checkAlreadyProxfied($potentialJsVar) === true) {
            return false;
        }
        return isValidJsVar($potentialJsVar);
    }

    /**
     * Validate url with extra proxy validation
     *
     * @param $potentialUrl mixed
     * @return bool
     */
    protected function validUrl($potentialUrl)
    {
        if (empty($potentialUrl)) {
            return false;
        }
        // not valid if already proxyfied
        if ($this->checkAlreadyProxfied($potentialUrl) === true) {
            return false;
        }
        return isValidUrl($potentialUrl);
    }

    /**
     * Validates relative URL
     *
     * @param mixed $url
     * @return boolean
     */
    protected function isRelativeUrl($url)
    {
        if (empty($url)) {
            return false;
        }

        $invalidElements = ['<', '>', "\r", "\n", "\t", '"', "'"];
        $valid = true;

        foreach ($invalidElements as $element) {
            $valid = $valid && strpos($url, $element) === false;
        }

        if (
            strpos($url, 'http') === 0 ||
            strpos($url, '//') === 0
        ) {
            $valid = false;
        }

        $excludedDomains = [
            'mraid.js',
        ];
        foreach ($excludedDomains as $domain) {
            $valid = $valid && strpos($url, $domain) === false;
        }

        return $valid;
    }

    /**
     * Returns absolute URL
     *
     * @param $url
     * @param $proxyUrlParameter
     * @return string
     */
    protected function getAbsoluteUrl($url, $proxyUrlParameter)
    {
        if (
            strpos($url, '/') === 0 &&
            strpos($url, '//') === false
        ) {
            $domainPath = $this->extractDomainPath($_GET[$proxyUrlParameter]);
            $url = $domainPath['domain'] . $url;
        }

        if (strpos($url, 'http') === false) {
            $url = $this->getCurrentPath($proxyUrlParameter) . $url;
        }

        return $url;
    }
}
