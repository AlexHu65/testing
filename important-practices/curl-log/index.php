<?php
/**
 * Created by PhpStorm.
 * User: alejandro.chavez
 * Date: 5/25/2017
 * Time: 5:20 PM
 */


//SET THE JSON
$json = '{ "app": { "storeurl": "https://itunes.apple.com/.../id628677149", "cat": [ "IAB26", "IAB11" ], "name": "Amazon Music", "publisher": { "name": "Amazon", "id": "adPub123" }, "id": "8768b8b5d0ca4db7bd87c2e5ba26f9bb", "bundle": "tunein.player.aaxqa" }, "at": 2, "tmax": 200, "regs": { "coppa": 0 }, "bcat": [ "IAB2", "IAB13-12" ], "id": "ihUf0ApMSjakfukoianIiw", "imp": [ { "displaymanager": "displaymanager", "bidfloor": 0.123, "id": "cptx-yYMQiCqvif9NRZSZQ", "video": { "ext": { "adtype": 0, "slotId": "8220fdce-1608-48ee-901f-b350a7b8be83" }, "protocol": "2", "linearity": 1, "maxduration": 30, "minbitrate": 300, "w": "350", "h": "250", "startdelay": 0, "api": [ 1, 2 ], "minduration": 0, "mimes": [ "video/mp4", "video/webm", "application/x-shockwave-flash" ] }, "instl": 0 } ], "device": { "os": "iOS", "ifa": "682C3B83-C216-4B62-BA03-423A1A25A241", "ip": "72.122.13.23", "js": 1, "language": "en", "ua": "Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3_5 like Mac OS X;) AppleWebKit/533.17.9 (KHTML, like Gecko) Mobile/8L1", "devicetype": 1, "geo": { "zip": "90049", "country": "USA", "city": "Los Angeles", "metro": "803", "lon": -118.46607, "region": "CA", "type": 2, "lat": 34.052695 }, "carrier": "VERIZON", "osv": "6.3", "model": "iPhone", "connectiontype": 2, "make": "Apple" }, "badv": [ "company1.com", "company2.com" ] }';

//SET THE CURL OPTIONS

$ch = curl_init("aax.amazon-adsystem.com/e/mdtb/ads");
$fp = fopen("curl_marsmedia.txt", "w");

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($json))
);

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 1);


//LOOP TO MAKE MORE OF ONE REQUEST

//for ($i = 0; $i <= 50; $i++) {
curl_exec($ch);
echo curl_getinfo($ch, CURLINFO_EFFECTIVE_URL) . '<br>';
//}
curl_close($ch);

fclose($fp);


$file = fopen("curl_marsmedia.txt", "r");

$text = fread($file, filesize("curl_marsmedia.txt"));

echo nl2br($text);
