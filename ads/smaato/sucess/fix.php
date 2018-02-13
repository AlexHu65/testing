<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Smaato11 extends SpecialCaseHelper
{
    public function level2($proxyUrl, $proxyParams, $proxyUrlParameter, &$content)
    {
        $continueProxyfy = true;
        $replaced = false;

        if (strpos($content, 'http://www.teach.org') === false) {
            // return the results
            return [
                'replaced' => $replaced,
                'continueProxyfy' => $continueProxyfy,
            ];
        }

        $search[] = array('target="');
        $replace[] = array('target="_blank"');

        if (count($search) > 0) {
            $cont = 0;

            foreach ($search as $key => $value) {
                $content = str_replace($search[$key], $replace[$key], $content, $cont);
            }

            if ($cont > 0) {
                $replaced = true;
            }


        }
        // return the results
        return [
            'replaced' => $replaced,
            'continueProxyfy' => $continueProxyfy,
        ];

    }
}