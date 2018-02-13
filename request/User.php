<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class User
{
    /**
     * Get user identifier based on request os
     *
     * @param $request
     * @return string
     */
    public function getUserIdentifier($request)
    {
        switch (strtolower($request['os'])) {
            case 'ios':
                $ifa = $request['idfa'];
                break;

            case 'android':
                $ifa = $request['aaid'];
                break;

            default:
                $ifa = $request['imei'];
        }

        return $ifa;
    }

    /**
     * Get user identifier based on request os using idfv/hdidfv not idfa/hdidfv
     *
     * @param $request
     * @return string
     */
    public function getUserIdentifierV2($request)
    {
        $identifier = '';

        $isEmpty = function ($variable) {
            if (
                empty($variable) ||
                strtolower($variable) == 'na'
            ) {
                return true;
            }

            return false;
        };


        if (
            !empty($request['os']) &&
            !$isEmpty($request['os'])
        ) {
            $identifier = '';

            switch (strtolower($request['os'])) {
                case 'ios':
                    if (
                        !empty($request['idfv']) &&
                        !$isEmpty($request['idfv'])
                    ) {
                        $identifier = $request['idfv'];
                    }

                    break;

                case 'android':
                    if (
                        !empty($request['hdidfv']) &&
                        !$isEmpty($request['hdidfv'])
                    ) {
                        $identifier = $request['hdidfv'];
                    }

                    break;
            }
        }

        return $identifier;
    }

    public function getGender($request)
    {
        $gender = 'O';

        if (!empty($request['gender'])) {
            $trimmedGender = trim($request['gender']);
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