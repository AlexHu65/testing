<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Service extends AbstractService {

    public $adSize = array();

    public function prepareRequest($request)
    {

        $resolutionInfo = $this->getResolutionInfo(
                $request['width'], $request['height'], $request['device_type'], $request['type'], ['static' => true] // fetch static inventory (even for fullscreen); if omitted it will send the actual device w/h
        );

        $this->adSize['w'] = $resolutionInfo['w'];
        $this->adSize['h'] = $resolutionInfo['h'];
    }

}
