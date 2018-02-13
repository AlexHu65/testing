<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'AbstractService.php';
require './config.php';

class Service extends AbstractService {
    /* 10/06/2016 All var will be change to Protected , when upload to BETA DIR */

    public $adSize = [];
    public $request;
    public $response;
    public $partnerInfo;
    public $redirectionCache = [];
    public $gameSupportsVpaid = false;
    public $config = [

        /*
         * General Partner Information
         */
        'name' => 'Mobfox',
        /**
         * The type of the partner.
         */
        'partner_type' => 'SSP', //SSP

        /*
         * Mode: sandbox/production
         */
        'mode' => 'sandbox',
        /*
         * Sandbox configuration settings
         */
        'sandbox' => [
            'base_uri' => 'http://my.mobfox.com/request.php?m=test',
        ],
        /*
         * Production configuration settings
         */
        'production' => [
            'base_uri' => 'http://my.mobfox.com/request.php?m=live',
        ],
        /*
         * Tag Config Values
         */
        'api_version' => 'api',
        
        
        /* ??? I need this */
        
        
        'r_floor' => '0.8',
        
        
        /* Side gameloft or side Matomy? */
        'hash_inventory' => [
            'banner' => 'fe96717d9875b9da4339ea5367eff1ec'
        ],
        /*
         * Contact the developers in charge
         */
        'devs' => 'alejandro.chavez@gameloft.com',
        /*
         * Common Settings
         */
        'common' => [
            'transport' => [
                'method' => 'GET',
                'timeout' => 3.0
            ],
            'server_side_caching' => [
                'status' => 'enabled',
                'expiry_time' => [
                    'banner' => 1800,
                    'fullscreen' => 1800,
                    'video' => 14400
                ]
            ]
        ],
        'pid_to_placement_ids' => [
            // Age of Sparta:
            '2525' => 'aos', // Age of Sparta AMZ Underground Free HD+
            '2020' => 'aos', // Age of Sparta Free+
            '2156' => 'aos', // Age of Sparta Free+ GL Shop
            '2202' => 'aos', // Age of Sparta Free+ XD
            // Asphalt 8:
            '1889' => 'asp8', // Asphalt 8 - Paymium HD+ Blackberry
            '1791' => 'asp8', // Asphalt 8 Free+ Amazon
            '1788' => 'asp8', // Asphalt 8 Free+ GLShop
            '1780' => 'asp8', // Asphalt 8 Free+ GPlay
            '2248' => 'asp8', // Asphalt 8 Free+ HEP China Market
            '1574' => 'asp8', // Asphalt 8 Free+ iOS
            '1826' => 'asp8', // Asphalt 8 Free+ PSP Vita
            '1787' => 'asp8', // Asphalt 8 Free+ SKT/KT/Samsung
            '2177' => 'asp8', // Asphalt 8 Free+ Snail TV
            '1815' => 'asp8', // Asphalt 8 Free+ Tizen
            '1781' => 'asp8', // Asphalt 8 Free+ XD
            '2127' => 'asp8', // Asphalt 8 Free+ Xiaocong TV
            '1800' => 'asp8', // Asphalt 8 Paymium HD+ AMZ Qualcomm STB
            '1805' => 'asp8', // Asphalt 8 Paymium HD+ China Market
            '1804' => 'asp8', // Asphalt 8 Premium HD+
            // Asphalt Nitro:
            '2595' => 'aspn', // Asphalt Nitro Mobile Freemium China Market
            '2361' => 'aspn', // Asphalt Nitro Mobile Freemium GPlay
            '2640' => 'aspn', // Asphalt Nitro Mobile Freemium HEP
            '2032' => 'aspn', // Asphalt Nitro Mobile Paymium
            '2316' => 'aspn', // Asphalt Nitro Mobile Paymium Tizen
            '2334' => 'aspn', // Asphalt Nitro Mobile Paymium TnB
            '2348' => 'aspn', // Asphalt Nitro Mobile Paymium TnB Ads WP8 PHD
            '2036' => 'aspn', // Asphalt Nitro Mobile Premium
            '2317' => 'aspn', // Asphalt Nitro NOVI TnB
            '2367' => 'aspn', // Asphalt Nitro Paymium TV
            // Asphalt Over Drive:
            '1684' => 'aspod', // Asphalt Over Drive Free+
            '2023' => 'aspod', // Asphalt Over Drive Free+ Amazon
            '2019' => 'aspod', // Asphalt Over Drive Free+ Android China
            '2021' => 'aspod', // Asphalt Over Drive Free+ GL Shop
            '2022' => 'aspod', // Asphalt Over Drive Free+ Samsung Shop
            '1990' => 'aspod', // Asphalt Over Drive Free+ XD
            // Blitz Brigade:
            '1649' => 'bb', // Blitz Brigade Free+
            '1320' => 'bb', // Blitz Brigade Free+ iOS
            '1976' => 'bb', // Blitz Brigade Free+ XD
            // Brothers In Arms 3:
            '2528' => 'bia3', // Brothers In Arms 3 AMZ Underground Free HD+
            '1850' => 'bia3', // Brothers In Arms 3 Free+ Android
            '2608' => 'bia3', // Brothers in Arms 3 Free+ Cafe Bazaar
            '2215' => 'bia3', // Brothers In Arms 3 Free+ China Market
            '2049' => 'bia3', // Brothers In Arms 3 Free+ GL Shop
            '1642' => 'bia3', // Brothers In Arms 3 Free+ iOS
            '2050' => 'bia3', // Brothers In Arms 3 Free+ Samsung Shop
            '1860' => 'bia3', // Brothers In Arms 3 Free+ XD
            // Candy Block Breaker:
            '2027' => 'cbb', // Candy Block Breaker AD
            '1733' => 'cbb', // Candy Block Breaker for Tango
            // Cars:
            '1732' => 'cars', // Cars Mobile Premium
            '2041' => 'cars', // Cars Mobile TnB
            '2266' => 'cars', // Cars NOVI TnB
            '2339' => 'cars', // Cars TnB + Ads
            '2360' => 'cars', // Cars: Fast as Lightning AMZ Underground Free HD+
            '2044' => 'cars', // Cars: Fast as Lightning Free+ Android
            '2236' => 'cars', // Cars: Fast as Lightning Free+ Blackberry
            '1722' => 'cars', // Cars: Fast as Lightning Free+ iOS
            '1779' => 'cars', // Cars: Fast as Lightning Free+ Win8
            '2335' => 'cars', // Cars: Hotshot Racing TnB Ads WP8
            // CSI Slots:
            '1465' => 'csis', // CSI: Slots Free+
            '2219' => 'csis', // CSI: Slots Free+ Android
            '2225' => 'csis', // CSI: Slots Free+ XD
            // Danger Dash:
            '1919' => 'dd', // Danger Dash Mobile AD
            '1706' => 'dd', // Danger Dash Mobile Freemium
            '1707' => 'dd', // Danger Dash Mobile Premium
            '1977' => 'dd', // Danger Dash Mobile TnB
            '2227' => 'dd', // Danger Dash Native TnB
            '2264' => 'dd', // Danger Dash NOVI Freemium
            // Despicable Me Minion Rush:
            '1677' => 'dm2', // Despicable Me: Minion Rush Free+
            '1790' => 'dm2', // Despicable Me: Minion Rush Free+ AMZ Goldfish
            '1799' => 'dm2', // Despicable Me: Minion Rush Free+ AMZ Qualcomm STB
            '2237' => 'dm2', // Despicable Me: Minion Rush Free+ Blackberry
            '1866' => 'dm2', // Despicable Me: Minion Rush Free+ China Market
            '1892' => 'dm2', // Despicable Me: Minion Rush Free+ HEP Global
            '1898' => 'dm2', // Despicable Me: Minion Rush Free+ JP Clone
            '2133' => 'dm2', // Despicable Me: Minion Rush Free+ Tizen
            '1880' => 'dm2', // Despicable Me: Minion Rush Free+ TV
            '1838' => 'dm2', // Despicable Me: Minion Rush Free+ Win8
            // Dizzy Fruit:
            '1910' => 'df', // Dizzy Fruit iOS
            '2005' => 'df', // Dizzy Fruit Mobile AD
            // Dragon Mania Legends:
            '2223' => 'dml', // Dragon Mania Legends Free+ Android China
            '2600' => 'dml', // Dragon Mania Legends Free+ Cafe Bazaar
            '2047' => 'dml', // Dragon Mania Legends Free+ GL Shop
            '2116' => 'dml', // Dragon Mania Legends Free+ Google Play
            '1897' => 'dml', // Dragon Mania Legends Free+ iOS
            '2018' => 'dml', // Dragon Mania Legends Free+ Win8
            // Gangstar Vegas (aka Gangastar 4):
            '1622' => 'g4', // Gangstar 4 : City of Sin Free+
            '1817' => 'g4', // Gangstar 4 : City of Sin Paymium HD+ Samsung Latam
            '1879' => 'g4', // Gangstar 4 : City of Sin Paymium HD+ TV
            // GT Racing 2
            '1822' => 'gtr2', // GT Racing 2 Free+ Amazon
            '1825' => 'gtr2', // GT Racing 2 Free+ Gplay
            '1923' => 'gtr2', // GT Racing 2 Free+ HEP Global
            '1654' => 'gtr2', // GT Racing 2 Free+ iOS
            '1964' => 'gtr2', // GT Racing 2 Free+ Samsung
            '1823' => 'gtr2', // GT Racing 2 Free+ SKT
            '1859' => 'gtr2', // GT Racing 2 Free+ XD
            '1679' => 'gtr2', // GT Racing 2 Mobile Premium
            '2556' => 'gtr2', // GT Racing 2 MRE Free
            '2267' => 'gtr2', // GT Racing 2 NOVI TnB
            '1960' => 'gtr2', // GT Racing 2 TnB
            // Heroes of Order and Chaos:
            '1374' => 'hoc', // Heroes of Order and Chaos Free+
            '2149' => 'hoc', // Heroes of Order and Chaos Free+ China Market
            '1392' => 'hoc', // Heroes of Order and Chaos Free+ iOS
            '1903' => 'hoc', // Heroes of Order and Chaos Free+ XD
            // Ice Age Adventures:
            '2529' => 'iaadv', // Ice Age Adventures AMZ Free HD+
            '1725' => 'iaadv', // Ice Age Adventures Free+
            '1936' => 'iaadv', // Ice Age Adventures Free+ Android
            '2031' => 'iaadv', // Ice Age Adventures Free+ Android China
            '1969' => 'iaadv', // Ice Age Adventures Free+ Windows 8
            // Ice Age Avalanche:
            '1840' => 'iaaval', // Ice Age Avalanche AMZ Free HD+
            '2002' => 'iaaval', // Ice Age Avalanche Free+
            '2199' => 'iaaval', // Ice Age Avalanche Free+ XD
            // Ice Age Village:
            '1885' => 'iavl', // Ice Age Village Amazon TV Free+
            '2530' => 'iavl', // Ice Age Village AMZ Free HD+
            '1486' => 'iavl', // Ice Age Village DLC
            '1390' => 'iavl', // Ice Age Village Free+
            '1615' => 'iavl', // Ice Age Village Free+ (Amazon mobile version)
            '1609' => 'iavl', // Ice Age Village Free+ AmzTest
            '1742' => 'iavl', // Ice Age Village Free+ SFR
            '1595' => 'iavl', // Ice Age Village Free+ XBL
            '1749' => 'iavl', // Ice Age Village Mobile Freemium
            '1750' => 'iavl', // Ice Age Village Mobile Premium
            '2364' => 'iavl', // Ice Age Village NOVI Freemium
            '1634' => 'iavl', // Ice Age Village TV Free+
            // Iron Man 3:
            '1680' => 'im3', // Iron Man 3 Free+
            '1767' => 'im3', // Iron Man 3 Free+ Samsung Apps
            '1755' => 'im3', // Iron Man 3 Free+ Update 2
            '1697' => 'im3', // Iron Man 3 Mobile Premium
            '2263' => 'im3', // Iron Man 3 NOVI TnB
            '1741' => 'im3', // Iron Man 3 Stub
            '1943' => 'im3', // Iron Man 3 TnB
            // Littlest Pet Shop:
            '2388' => 'lps', // Littlest Pet Shop AMZ Free HD+
            '1367' => 'lps', // Littlest Pet Shop Free+
            '1523' => 'lps', // Littlest Pet Shop Mobile Freemium
            '1524' => 'lps', // Littlest Pet Shop Mobile Premium
            '2583' => 'lps', // Littlest Pet Shop NOVI Freemium
            '1951' => 'lps', // Littlest Pet Shop TnB
            '1695' => 'lps', // Littlest Pet Shop TV Free+
            // Modern Combat 5:
            '1924' => 'mc5', // Modern Combat 5 Free+ Android
            '1968' => 'mc5', // Modern Combat 5 HD+ BDC
            '2012' => 'mc5', // Modern Combat 5 Paymium HD+ Blackberry
            '2016' => 'mc5', // Modern Combat 5 Paymium HD+ HEP Global
            '1730' => 'mc5', // Modern Combat 5 Paymium HD+ iOS
            '1875' => 'mc5', // Modern Combat 5 Paymium HD+ XD
            '2126' => 'mc5', // Modern Combat 5 Paymium HD+ Xiaocong TV
            '1813' => 'mc5', // Modern Combat 5 TnB HD+
            // My Little Pony:
            '2527' => 'mlp', // My Little Pony AMZ Underground Free HD+
            '1370' => 'mlp', // My little Pony Free+
            '1907' => 'mlp', // My little Pony Free+ XD
            '1691' => 'mlp', // My little Pony TV Free+
            // N.O.V.A. 3:
            '1573' => 'nova3', // N.O.V.A. 3 HD+
            '2122' => 'nova3', // N.O.V.A. 3 HD+ Free AD
            '2042' => 'nova3', // N.O.V.A. 3 HD+ Free AD iOS
            '1553' => 'nova3', // N.O.V.A. 3 HD+ TnB
            '1627' => 'nova3', // N.O.V.A. 3 Mobile Premium
            '2558' => 'nova3', // N.O.V.A. 3 MRE Free
            '2587' => 'nova3', // N.O.V.A. 3 NOVI TnB
            '1224' => 'nova3', // N.O.V.A. 3 Paymium HD+
            '1591' => 'nova3', // N.O.V.A. 3 Paymium HD+ iOS
            '1640' => 'nova3', // N.O.V.A. 3 Paymium HD+ XBL
            '1949' => 'nova3', // N.O.V.A. 3 TnB
            // NFL Pro 2014 (aka NFL Pro 2013 in gameloftshop)
            '1514' => 'nfl2014',
            // Ninja Up:
            '1911' => 'nu', // Ninja Up iOS
            '2006' => 'nu', // Ninja Up Mobile AD
            '2186' => 'nu', // Ninja Up Native TnB
            // Pastry Paradise:
            '2526' => 'pp', // Pastry Paradise AMZ Underground Free HD+
            '1893' => 'pp', // Pastry Paradise Free+
            '2024' => 'pp', // Pastry Paradise Free+ Android
            '2210' => 'pp', // Pastry Paradise Free+ HEP Global
            '2351' => 'pp', // Pastry Paradise Free+ iOS Ads
            '2007' => 'pp', // Pastry Paradise Free+ Win8
            '2145' => 'pp', // Pastry Paradise Mobile Freemium
            '2146' => 'pp', // Pastry Paradise Mobile Premium
            // 2012 Real Football:
            '1139' => 'rf2012', // 2012 Real Football
            '1337' => 'rf2012', // 2012 Real Football Free+
            '1883' => 'rf2012', // 2012 Real Football Free+ Tizen
            '1477' => 'rf2012', // 2012 Real Football HD+
            '2274' => 'rf2012', // 2012 Real Football NOVI TnB
            '1415' => 'rf2012', // 2012 Real Football Orange
            '1495' => 'rf2012', // 2012 Real Football Orange Box
            '1434' => 'rf2012', // 2012 Real Football TnB
            '1349' => 'rf2012', // 2012 Real Soccer
            '1399' => 'rf2012', // 2012 Real Soccer Free+
            '1350' => 'rf2012', // 2012 Real Soccer HD+
            // Rival Knights:
            '1645' => 'rk', // Rival Knights Free+
            '1841' => 'rk', // Rival Knights Free+ Amazon
            '1762' => 'rk', // Rival Knights Free+ Android
            '1842' => 'rk', // Rival Knights Free+ Samsung Shop
            '1849' => 'rk', // Rival Knights Free+ XD
            // Shark Dash:
            '1526' => 'sd', // Shark Dash FREE
            '1550' => 'sd', // Shark Dash HD+
            '1572' => 'sd', // Shark Dash HD+ TnB
            '2043' => 'sd', // Shark Dash Mobile AD
            '1373' => 'sd', // Shark Dash Paymium HD+
            '2130' => 'sd', // Shark Dash Paymium HD+ Tizen
            '1554' => 'sd', // Shark Dash Paymium HD+ TnB
            '1606' => 'sd', // Shark Dash Paymium HD+ Win8
            '1636' => 'sd', // Shark Dash Paymium HD+ XBL
            '1598' => 'sd', // Shark Dash Paymium SPEN HD+
            // Shark Dash Live Wallpaper:
            'shark_dash_live_wallpaper' => 'sdlw', // todo - unknown pid for the moment
            // Siegefall:
            '1916' => 'siege', // Siegefall Free+
            '2615' => 'siege', // Siegefall Free+ Cafe Bazaar
            '2387' => 'siege', // Siegefall Free+ China Market
            '2222' => 'siege', // Siegefall Free+ Win8
            // Six Guns:
            '1226' => 'sg', // Six Guns Free+
            '1721' => 'sg', // Six Guns Free+ Android
            '1846' => 'sg', // Six Guns Free+ GE XBL
            '1709' => 'sg', // Six Guns Free+ XBL
            '1546' => 'sg', // Six Guns TV Free+
            // Spider-Man Unlimited:
            '2009' => 'smunl', // Spider-Man Unlimited Free+ Android
            '2017' => 'smunl', // Spider-Man Unlimited Free+ Android China
            '2045' => 'smunl', // Spider-Man Unlimited Free+ BlackBerry
            '1765' => 'smunl', // Spider-Man Unlimited Free+ iOS
            '1966' => 'smunl', // Spider-Man Unlimited Free+ WP8
            // Total Conquest:
            '1714' => 'tc', // Total Conquest Free+
            '1830' => 'tc', // Total Conquest Free+ Amazon
            '1914' => 'tc', // Total Conquest Free+ BlackBerry
            '1512' => 'tc', // Total Conquest Free+ iOS
            '1832' => 'tc', // Total Conquest Free+ Korea
            '1831' => 'tc', // Total Conquest Free+ Samsung HD
            '1829' => 'tc', // Total Conquest Free+ Win8
            '1769' => 'tc', // Total Conquest Mobile Freemium
            '1770' => 'tc', // Total Conquest Mobile Premium
            '2272' => 'tc', // Total Conquest NOVI TnB
            // Trivial Pursuit:
            '2055' => 'tp', // Trivial Pursuit Free+
            '2537' => 'tp', // Trivial Pursuit Free+ China
            '2256' => 'tp', // Trivial Pursuit Free+ GL Shop
            '2250' => 'tp', // Trivial Pursuit W8
            // UNO and Friends
            '1613' => 'uno', // UNO and Friends Free+
            '1637' => 'uno', // UNO and Friends Free+ XBL
            '1534' => 'uno', // UNO and Friends Free+iOS
            '1719' => 'uno', // UNO and Friends LINE Free+
            // Wonder Zoo:
            '1630' => 'wzoo', // Wonder Zoo - TV
            '1507' => 'wzoo', // Wonder Zoo Free+
            '2212' => 'wzoo', // Wonder Zoo Free+ G-Cluster
            '2151' => 'wzoo', // Wonder Zoo Free+ Tizen
            '1403' => 'wzoo', // Wonder Zoo Mobile Freemium
            '2337' => 'wzoo', // Wonder Zoo Mobile Freemium Ads
            '1502' => 'wzoo', // Wonder Zoo Mobile Premium
            '1623' => 'wzoo', // Wonder Zoo Mobile Special Freemium
            '1944' => 'wzoo', // Wonder Zoo TnB
            // World at Arms:
            '1376' => 'waa', // World At Arms Free+
            '1798' => 'waa', // World At Arms Free+ Fire TV Edition
            '1824' => 'waa', // World At Arms Free+ Gplay UPD
            '1738' => 'waa', // World At Arms Free+ Tango
            '1854' => 'waa', // World At Arms Free+ XD
            '1717' => 'waa', // World At Arms Mobile Freemium
            '1718' => 'waa', // World At Arms Mobile Premium
            '1658' => 'waa', // World At Arms TV Free+
            // Country Friends
            '2037' => 'cf', // Country Friends Free+
            '2536' => 'cf', // Country Friends Free+ China
            '2327' => 'cf', // Country Friends Free+ Win8
            // Sniper Fury
            '2208' => 'sf', // Sniper Fury Free+
            '2372' => 'sf', // Sniper Fury Free+ XD
            // Disney Magic Kingdoms
            '1845' => 'dmk', // Disney Kingdom Free+
            '2699' => 'dmk', // Disney Kingdom Free+ GL Shop
            '2709' => 'dmk', // Disney Kingdom Free+ Japan
            '2566' => 'dmk', // Disney Magic Kingdom Free+ XD
            '2033' => 'dmk', // Disney Magic Kingdom Mobile Freemium
            '2429' => 'dmk', // Disney Magic Kingdom Mobile Premium
        ]
    ];

    public function prepareRequest($request)
    {

        $this->request = $request;

        /* Return this generate the request */
        $preparedRequest = [
            'url' => $this->config[$this->config['mode']]['base_uri'],
            'transpost_settings' => $this->config['common']['transport'],
            'payload' => []
        ];
        /* Generate adspace */
        $resolutionInfo = $this->getResolutionInfo(
                $request['request']['width'], 
                $request['request']['height'], 
                $request['request']['device_type'], 
                $request['request']['type'], ['static' => true] // fetch static inventory (even for fullscreen); if omitted it will send the actual device w/h 
        );


        /* Setting adspace */
        $this->adSize['h'] = $resolutionInfo['h'];
        $this->adSize['w'] = $resolutionInfo['w'];

        /* Setting adid */
        $adid = $this->select_adid($request['request']['os']);

        /* Payload values request parameters */

        /* Mandatory Parameters */

        $payload['rt'] = $this->config['api_version'];
        $payload['r_type'] = $request['request']['type'];
        $payload['i'] = $request['request']['ip'];
        $payload['s'] = $this->config['hash_inventory'][$this->request['request']['type']];
        $payload['u'] = $request['request']['user_agent'];

        /* Video parameters */

        /* Global parameters */

        $payload['adspace_width'] = $this->adSize['w'];
        $payload['adspace_height'] = $this->adSize['h'];
        $payload['demo_gender'] = $this->checkGender($request);
        $payload['demo_age'] = $request['request']['user_age'];
        $payload['adspace_strict'] = 0;
        $payload['latitude'] = $request['request']['gps_lat'];
        $payload['longitude'] = $request['request']['gps_long'];
        $payload[$adid['os_adid']] = $adid['adid'];
        $payload['c_mraid'] = $request['request']['mraid'];
        $payload['imp_instl'] = $request['request']['fullscreen'];
        $payload['r_floor'] = $this->config['r_floor']; //???
        
        
        /* Prepared request */

        $preparedRequest['url'] = $preparedRequest['url'] . '&' . http_build_query($payload);
        echo $preparedRequest['url'];
    }

    public function validateResponse($request)
    {
        
    }

    public function processResponse($response)
    {
        
    }

    protected function getResolutionInfo($deviceWidth, $deviceHeight, $deviceType, $requestType, $options = [])
    {
        $resolutionInfo = [];

        if (in_array($requestType, array('video', 'interstitial', 'fullscreen'))) {
            $requestType = 'fullscreen';
        } else {
            $requestType = 'banner';
        }

        $orientation = '';

        // set orientation from option if present
        if (!empty($options['orientation'])) {
            $tempOrientation = strtolower($options['orientation']);
            if (in_array($tempOrientation, ['landscape', 'portrait'])) {
                $orientation = $tempOrientation;
            }
        }

        // if orientation was not passed thus couldn't be set from there
        if (empty($orientation)) {
            if ($deviceWidth >= $deviceHeight) {
                $orientation = 'landscape'; // even if it's squared, we prefer to consider it landscape
            } else {
                $orientation = 'portrait';
            }
        }

        $inventory = [
            'banner' => [
                'phone' => [
                    'w' => 320,
                    'h' => 50
                ],
                'tablet' => [
                    'w' => 728,
                    'h' => 90
                ]
            ],
            'fullscreen' => [
                'phone' => [
                    'w' => 320,
                    'h' => 480
                ],
                'tablet' => [
                    'w' => 768,
                    'h' => 1024
                ]
            ]
        ];

        // set device type (tablet/phone)
        $deviceType = strtolower($deviceType);
        if ($deviceType == 'na') {
            $deviceType = 'phone';
        }

        // setting w & h
        if ($requestType == 'banner' || !empty($options['static'])) {
            $resolutionInfo['w'] = $inventory[$requestType][$deviceType]['w'];
            $resolutionInfo['h'] = $inventory[$requestType][$deviceType]['h'];
        } else {
            $resolutionInfo['w'] = $deviceWidth;
            $resolutionInfo['h'] = $deviceHeight;
        }

        if ($requestType == 'fullscreen' && $orientation == 'landscape' && !empty($options['static'])) {
            $wTemp = $resolutionInfo['w'];
            $resolutionInfo['w'] = $resolutionInfo['h'];
            $resolutionInfo['h'] = $wTemp;
        }

        return $resolutionInfo;
    }

    private function select_adid($device_os)
    {
        //Android
        $adid = ['os_adid' => 'o_andadvid', 'adid' => $this->request['request']['aaid']];

        //Ios

        if ($device_os == 'ios') {

            $adid = ['os_adid' => 'o_iosadvid', 'adid' => $this->request['request']['idfa']];
        }

        return $adid;
    }

    private function checkGender()
    {
        if (!isset($this->request['request']['gender']))
            return 'undefined';


        $gender = $this->getGender($this->request);
        switch ($gender) {
            case 'M':
                $genderString = 'male';
                break;
            case 'F':
                $genderString = 'female';
                break;
            case 'na':
                $genderString = 'undefined';
                break;
            default:
                $genderString = 'undefined';
                break;
        }

        return $genderString;
    }

    public function getGender($request)
    {
        $gender = 'O';

        if (!empty($request['request']['gender'])) {
            $trimmedGender = trim($request['request']['gender']);
            $toUpperGender = strtoupper($trimmedGender);
            switch ($toUpperGender) {
                case 'F':
                case 'FEMALE':
                case '2':
                    $gender = 'F';
                    break;

                case 'M':
                case 'MALE':
                case '1':
                    $gender = 'M';
                    break;
            }
        }

        return $gender;
    }

}
