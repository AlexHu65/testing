<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require './AbstractService.php';
require './services.php';


/*OS Android */
$request = array
    (
    'type' => 'video',
    'fullscreen' => '1',
    'width' => '568',
    'height' => '320',
    'country' => 'US',
    'country_state' => 'MO',
    'device_country' => 'us',
    'user_agent' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 10_0_1 like Mac OS X) AppleWebKit/602.1.50 (KHTML, like Gecko) Mobile/14A403',
    'os' => 'ios',
    'firmware' => '10.0.1',
    'pkg_name' => 'com.gameloft.asphalt8',
    'app_name' => 'Asphalt 8',
    'aaid' => 'na',
    'imei' => '02:00:00:00:00:00',
    'wma' => 'na',
    'idfa' => '78A7F5AF-6310-42C1-A1D8-BA559765DA90',
    'hdidfv' => 'na',
    'idfv' => '4E15BF1F-956A-4B2D-82B6-DF07B0AFFB4A',
    'ip' => '23.228.140.70',
    'conn' => 'wifi',
    'carrier_id' => '490',
    'carrier_name' => 'Sprint',
    'mcc' => '310',
    'mnc' => '120',
    'oid' => 'na',
    'shopapp_id' => '610391947',
    'product_id' => '1574',
    'device_lang' => 'en-us',
    'device_model' => 'iPhone5,3',
    'device_time' => '2016-09-27 15:12:41',
    'pricing_model' => 'CPM',
    'pricing_model_value' => '0.5000',
    'pricing_currency' => 'USD',
    'gps_acc' => '65.000000',
    'gps_lat' => '39.101636',
    'gps_long' => '-94.583756',
    'device_type' => 'Phone',
    'gender' => '1',
    'user_age' => '33',
    'game_orientation' => 'landscape',
    'adspaceid' => 'na',
    'mraid' => '1',
    'iv' => '0',
    'investigation_uuid' => null,
    'pointcut' => 'enter_section_main_menu',
    'optout' => '0',
    'is_bp_location' => '0',
    'programaticCaching' => '0'
);

$array2 = array();


$resolutioninfo = new Service();
$resolutioninfo->prepareRequest($request);
print_r($resolutioninfo);





