<?php

$ch = curl_init("https://bid290.rtbanalytics.com:9290/bidder/?bid=naa3w9");    // initialize curl handle
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$data = curl_exec($ch);
print($data);

