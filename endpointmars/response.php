<?php

/**
 * Created by PhpStorm.
 * User: alejandro.chavez
 * Date: 6/7/2017
 * Time: 7:00 PM
 */
class Response
{

    //public $request;
    public $response;
    public $json;

    function __construct($json)
    {
        // $this->request = $request;
        $this->json = $json;

    }

    public function show_response()
    {

        return $this->httpRequest($this->json);


    }


    public function saveLogRequest($json)
    {
        $fp = fopen("logs/request.txt", "a");
        fputs($fp, $json);
        fclose($fp);
    }


    public function httpRequest($json)
    {


        $json_request = $json;
        $ch = curl_init("http://bid290.rtbanalytics.com:9290/bidder/?bid=naa3w9");
       // $fp = fopen("logs/curl_marsmedia.html", "a");

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json_request);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($json_request))
        );
       // curl_setopt($ch, CURLOPT_FILE, $fp);
        //curl_setopt($ch, CURLOPT_HEADER, 1);
        //fclose($fp);
        /*$file = fopen("logs/curl_marsmedia.html", "r");
        $text = fread($file, filesize("logs/curl_marsmedia.html"));*/


        $result = curl_exec($ch);
       // curl_close($ch);

        $this->saveLogRequest($json_request);
        return $result/*nl2br($text);*/;
    }


}