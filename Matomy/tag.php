<?php

$response = ['body' => '<?xml version="1.0" encoding="UTF-8" ?>
<request type="noAd"></request>'];
//Format HTML, XML to string

$htmlString = htmlentities($response['body']);

//Path to eval on str_replace

$valuesToEval = ['xml', 'version', 'encoding', 'UTF', 'request', 'type'];
//Symbols to delete from response body
$symbolsTodelete = ['/[0-9.?-]/','/</', '/>/', '/=/', '/"/', '/\//', '/ /', '/\"/', '/\s\s+/'];

//Replace values xml and labels from string body
$formatedHtml = html_entity_decode(str_replace($valuesToEval, '', $htmlString));
var_dump((string)preg_replace($symbolsTodelete, '', $formatedHtml));
//if((string)preg_replace($symbolsTodelete, '', $formatedHtml ) =='noAd'){
    
    echo 'No ad found';
    
//}

    