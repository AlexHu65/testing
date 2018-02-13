<?php

$creative = $_POST['creative'];
$body_obj = json_decode(json_encode(simplexml_load_string($creative, "SimpleXMLElement", LIBXML_NOCDATA)));
echo '<pre>';
print_r($body_obj);
echo '</pre>';

$creative_id = null;
if (isset($body_obj->Ad->Wrapper->Creatives->Creative->{'@attributes'}->AdID)) {
    $creative_id = $body_obj->Ad->Wrapper->Creatives->Creative->{'@attributes'}->AdID;
}

if (isset($body_obj->Ad->InLine->Creatives->Creative->{'@attributes'}->AdID)) {
    $creative_id = $body_obj->Ad->InLine->Creatives->Creative->{'@attributes'}->AdID;
}

if (isset($body_obj->Ad->InLine->Creatives->Creative->{'@attributes'}->id)) {
    $creative_id = $body_obj->Ad->InLine->Creatives->Creative->{'@attributes'}->id;
}

echo $creative_id;