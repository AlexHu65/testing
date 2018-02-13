<?php
/**
 * Created by PhpStorm.
 * User: alejandro.chavez
 * Date: 6/15/2017
 * Time: 3:22 PM
 */

require 'Case1.php';

if (isset($_POST)) {
    echo $input = $_POST['input-ad'];
}



$proxyFied = new Case1($input);
$results = $proxyFied->level1();


echo '<pre>';
print_r($results);
echo '</pre>';