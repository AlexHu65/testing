<?php

/**
 * Created by PhpStorm.
 * User: alejandro.chavez
 * Date: 6/15/2017
 * Time: 3:23 PM
 */
require 'SpecialCaseHelper.php';

class Case1 extends SpecialCaseHelper
{
    private $input;

    function __construct($input = '')
    {
        $this->input = $input;


    }


    public function level1()
    {
        $continueProxyfy = true; // IMPORTANT: if false it will stop the generic proxy!!!
        $replaced = false; // this special case will only be applied if $replaced is returned as true


        return [
            'replaced' => (!$replaced ? 'false' : $replaced),
            'continueProxyfy' => $continueProxyfy,
        ];


    }


}