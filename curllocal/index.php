<?php

$url = 'http://10.153.9.1:8080/testing/endpointmars/';

//Initiate cURL.
$ch = curl_init($url);
$jsonDataEncoded = '{
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
}';
//Encode the array into JSON.
//$jsonDataEncoded = json_encode($jsonData);

//Tell cURL that we want to send a POST request.
curl_setopt($ch, CURLOPT_POST, 1);

//Attach our encoded JSON string to the POST fields.
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

//Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

//Execute the request
$result = curl_exec($ch);

