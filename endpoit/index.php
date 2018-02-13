<?php
/**
 * Created by PhpStorm.
 * User: alejandro.chavez
 * Date: 7/31/2017
 * Time: 5:19 PM
 */

$data = json_decode(file_get_contents('php://input'));
$json = json_encode($data);
echo $json;


$fp = fopen("log.txt", "w");
fputs($fp, $json);
fclose($fp);
