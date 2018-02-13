<?php
set_time_limit(0);
require 'Response.php';
//$body_request = file_get_contents('php://input');

/*$json = '{
  "partners":
   {"Marsmedia":
  {"priority":1,  
   "deals":{"id":"LIBR-GLFT-4e732ced3463d06de0ca9a15b6153677","wseats":""
           },
   "campaign":{"id":"2170"}}},
  "request":{
  "type":"banner","width":"320","height":"50","country":"US","user_agent":"Mozilla\/5.0 (Linux; Android 6.0; Nexus 5 Build\/MRA58N; wv) AppleWebKit\/537.36 (KHTML, like Gecko) Version\/4.0 Chrome\/48.0.2564.106 Mobile Safari\/537.36","fullscreen":1,"os":"android","firmware":"6.0","pkg_name":"com.gameloft.android.ANMP.GloftDMHM","app_name":"Ninja","aaid":"488c167b-85e8-4b0f-a9bf-833b05f8c0ae","imei":"02df71e7d024070d","wma":"na","idfa":"na","hdidfv":"cf9e7f92-420b-4a47-b37f-711d2f3f8b8b","idfv":"na","ip":"67.228.121.89","conn":"wifi","carrier_id":0,"carrier_name":"","mcc":"na","mnc":"na","oid":"na","shopapp_id":"com.gameloft.ModernCombat5","product_id":"1911","device_lang":"en","device_model":"iPhone5,1","device_time":"2016-03-16 15:30:25","pricing_model":"CPM","pricing_model_value":"0.1","pricing_currency":"USD","gps_acc":"na","gps_lat":"na","gps_long":"0","device_type":"Phone","gender":"2","user_age":"","game_orientation":"portrait","adspaceid":"na","mraid":"1","contentid":"0","contenttitle":"","contentlength":"1","contenturl":"","iv":0
  }
}';*/
/*
$json = '{
	"id": "1496883433888350275938a0e9d8ec2",
	"imp": [{
		"id": "1",
		"bidfloor": 0.1,
		"bidfloorcur": "USD",
		"secure": 0,
		"banner": {
			"w": 320,
			"h": 50,
			"battr": [1, 2, 3, 9, 10, 11, 13, 14],
			"mimes": ["text\/html", "image\/gif", "image\/jpeg", "image\/png", "text\/javascript"],
			"api": [3, 5]
		}
	}],
	"app": {
		"id": "1911",
		"name": "Ninja",
		"bundle": "com.gameloft.android.ANMP.GloftDMHM",
		"cat": ["IAB9", "IAB17-20", "IAB1", "IAB17", "IAB20-20", "IAB9-30", "IAB20"],
		"paid": 0,
		"publisher": {
			"id": "GAMELOFT",
			"name": "GAMELOFT",
			"domain": "gameloft.com",
			"cat": ["IAB9-30", "IAB19-6", "IAB19-29"]
		},
		"content": {
			"context": 2,
			"cat": ["IAB9-30", "IAB19-6", "IAB19-29"]
		}
	},
	"device": {
		"ua": "Mozilla\/5.0 (Linux; Android 6.0; Nexus 5 Build\/MRA58N; wv) AppleWebKit\/537.36 (KHTML, like Gecko) Version\/4.0 Chrome\/48.0.2564.106 Mobile Safari\/537.36",
		"dnt": 0,
		"lmt": 0,
		"ip": "67.228.121.89",
		"devicetype": 4,
		"os": "android",
		"osv": "6.0",
		"hwv": "iPhone5,1",
		"language": "en",
		"carrier": "",
		"connectiontype": 2,
		"ifa": "488c167b-85e8-4b0f-a9bf-833b05f8c0ae",
		"didsha1": "e83187179cae7317b45ad52ffae3c951ce0059a2",
		"didmd5": "fba494a2332bb38a7e495e6e2f792bf8",
		"dpidsha1": "4c0fdddcdcfce6380682acedd2ccd54e2ab94e4e",
		"dpidmd5": "45e07442a137d936ee2c7659858df1a0",
		"make": "iPhone5,1",
		"model": "iPhone5,1",
		"geo": {
			"country": "USA"
		}
	},
	"at": 2,
	"cur": ["USD"],
	"user": {
		"gender": "F"
	}
}';*//*

$data = json_decode(file_get_contents('php://input'), true);
$json = json_encode($data, true);

$response = new Response($json);
$result = $response->show_response();
$array_rtb = json_decode($result, true);


echo '<pre>';
if ($array_rtb !== null || $array_rtb !== '') {
    print_r($array_rtb);
   echo 'Banner: '. $array_rtb['seatbid'][0]['bid'][0]['iurl'];
}
echo '</pre>';*/

$_POST['data'];






