<?php

require 'proxy.php';

$htmlContent = $_POST['htmlcontent'];
$fixingTags = new FixingAds($htmlContent);
$fixingTags->fixScriptEmpty();


