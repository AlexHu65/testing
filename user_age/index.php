<?php
$json_request = '{"partners":{"Pinsight":{"priority":1,"creative_ids":3928,"deals":{"id":"LIBR-GLFT-4e732ced3463d06de0ca9a15b6153677","wseats":""},"campaign":{"id":"55180"}}},"request":{"type":"banner","width":"768","height":"1024","country":"US","user_agent":"Mozilla\/5.0 (Linux; Android 6.0; Nexus 5 Build\/MRA58N; wv) AppleWebKit\/537.36 (KHTML, like Gecko) Version\/4.0 Chrome\/48.0.2564.106 Mobile Safari\/537.36","fullscreen":1,"os":"android","firmware":"6.0","pkg_name":"com.gameloft.android.ANMP.GloftDMHM","app_name":"Despicable Me 2: Minion Rush","aaid":"488c167b-85e8-4b0f-a9bf-833b05f8c0ae","imei":"02df71e7d024070d","wma":"na","idfa":"na","hdidfv":"cf9e7f92-420b-4a47-b37f-711d2f3f8b8b","idfv":"na","ip":"103.19.166.232","conn":"wifi","carrier_id":0,"carrier_name":null,"mcc":"na","mnc":"na","oid":"na","shopapp_id":"com.gameloft.android.ANMP.GloftDMHM","product_id":"1677","device_lang":"en","device_model":"LGE_Nexus5","device_time":"2016-03-16 15:30:25","pricing_model":"CPM","pricing_model_value":"0.1000","pricing_currency":"USD","gps_acc":"na","gps_lat":"na","gps_long":"na","device_type":"Phone","gender":2,"user_age":"55","game_orientation":"portrait","adspaceid":"na","mraid":"1","contentid":"0","contenttitle":"","contentlength":"1","contenturl":"","advertisingid":"6D92078A-8246-4BA4-AE5B-76104861E7DC","iv":0}}';

$array_request = json_decode($json_request, 1);
//$user_age = $array_request['request']['user_age'];

$user_age = 14;

$age = new AgeUser();
//$age->validate_age($user_age);

$age->currentUserAge($user_age);

class AgeUser
{
    public function validate_age($user_age)
    {
        if ((int)$user_age <= 13) {
            $user_age = 0;
        }

        var_dump((int)$user_age);
    }


    public function currentUserAge($userAge)
    {
        $format = 'Y';
        $currentYear = date($format);
        $userCurrentAge = 'na';

        if (($userAge !== '') && ($userAge !== null) && ($userAge !== 'na')) {
            $userCurrentAge = ($currentYear - $userAge);
            if ($userCurrentAge > ($currentYear - 14)) {
                die(var_dump((int)$userCurrentAge = 'na'));
            }
        }
        echo (int)$userCurrentAge;
    }
}