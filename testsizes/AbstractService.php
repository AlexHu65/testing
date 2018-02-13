<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class AbstractService {
    
    
    
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
    
    
}