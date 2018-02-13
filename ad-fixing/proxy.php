<?php

/**
 * Created by PhpStorm.
 * User: alejandro.chavez
 * Date: 3/2/2017
 * Time: 9:26 AM
 */
class FixingAds
{
    public $htmlContent;
    public $startTag;
    public $endTag;
    public $closedTag;


    function __construct($htmlContent)
    {
        $this->htmlContent = $htmlContent;
        $this->startTag = '<script type="text/javascript">';
        $this->endTag = '<script type="text/javascript"';
        $this->closedTag = '</script>';
    }

    public function fixScriptEmpty($htmlCont = '')
    {
        $strDelimit;
        $htmlCont = $this->htmlContent;
        //Search for html tag <script type="text/javascript"> on start
        if (strpos($htmlCont, '<script type="text/javascript">') === 0 || strpos($htmlCont, '<script type="text/javascript"><script type="text/javascript"') === 0) {

            //If we found the tag, setting start variable
            $startPos = stripos($this->entitieEncode($htmlCont), $this->entitieEncode($this->startTag));

            //If we got a false finish execution
            if ($startPos === false) {
                return false;
            }

            if ($startPos === 0) {
                //Position to start search second start tag (the cause of the broken ad)
                $positionToStart = strlen($this->startTag);

                //Search for the position of the second start tag after his first occurrence
                $endPosition = stripos($this->entitieEncode($htmlCont), $this->entitieEncode($this->endTag), $positionToStart);

                //Length of the string between <script tags
                $len = $startPos + $endPosition;

                //We got the string to remove from the html content var
                $stringToRemove = substr($this->entitieEncode($htmlCont), $startPos, $len);

                //Obtaining the delimited string from the original $htmlcontent
                $strDelimit = str_replace($stringToRemove, '', $this->entitieEncode($htmlCont));

                // Now, we searching for the closed tag <\script from the delimiter string
                $start = stripos($strDelimit, $this->entitieEncode($this->closedTag));


                if ($start > 0) {

                    $start += strlen($this->entitieEncode($this->closedTag));

                    if (stripos($strDelimit, $this->entitieEncode($this->startTag), $start) === false) {

                        $adFixed = substr_replace($strDelimit, $this->entitieEncode($this->startTag), $start, 0);
                        //  echo $this->entitieDecode($adFixed);
                        echo $adFixed;
                    } else {

                        //echo $this->entitieDecode($strDelimit);
                        echo $strDelimit;
                    }
                }
            }
        }
        if (strpos($htmlCont, '<script type="text/javascript"') === 0) {
            $start = stripos($this->entitieEncode($htmlCont), $this->entitieEncode($this->closedTag));
            if ($start > 0) {

                $start += strlen($this->entitieEncode($this->closedTag));

                if (stripos($this->entitieEncode($htmlCont), $this->entitieEncode($this->startTag), $start) === false) {
                    $adFixed = substr_replace($this->entitieEncode($htmlCont), $this->entitieEncode($this->startTag), $start, 0);
                    echo $adFixed;
                } else {
                    echo $this->entitieEncode($htmlCont);

                }
            }
        }
    }

    public function entitieEncode($htmlContent)
    {

        return htmlentities($htmlContent);

    }

    public function entitieDecode($htmlContent)
    {

        return html_entity_decode($htmlContent);

    }
}





