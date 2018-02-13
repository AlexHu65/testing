<?php
/**
 * Created by PhpStorm.
 * User: alejandro.chavez
 * Date: 3/9/2017
 * Time: 11:34 AM
 */

$typeOfad = '';
$array = ['id' => 'implemaks', 'imp' => [0 => ['id' => '2132543521', 'bidfloor' => '0.5', 'bidfloorcur' => 'USA', 'secure' => '0', 'banner' => ['w' => '300', 'h' => '50']]]];

echo '<pre>';
print_r($array);

foreach ($array['imp'][0] as $key => $value) {

    if ($key == 'banner' || $key == 'video' || $key == 'fullscreen') {
        $typeOfad = $key;
        break;
    }

}

echo '<h1>Type of ad</h1>' . $typeOfad;
echo '</pre>';