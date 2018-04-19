<?php
/**
 * Created by PhpStorm.
 * User: alejandro.chavez
 * Date: 8/25/2017
 * Time: 5:03 PM
 */

$startStr = 'scrpt.src = \'';
$endStr = ';';
$string = 'scrpt.src = \'//cdn.a.ki/viewability-min.js?v=\' + new Date().getTime();';
$length = strlen($string);

//Si existe el primer string
if (stripos($string, '\'') === false) {
    echo 'the string is lost';
}

//La posicion del primer string
$pos = stripos($string, $startStr);

//Longitud desde el inicio del string hasta donde se encuentra el $startString
$pos += strlen($startStr);

//Validamos si no es un vacio el ultimo string
if ($endStr == '') {
    //Si lo es, la posicion final sera hasta el ultimo caracter del string de entrada
    $endPos = $len = strlen($string);

} else {
    //Si no lo es, se calcula la $endpos desde el inicio del string hasta la pos inicial para encontrar el $endStr
    $endPos = stripos($string, $endStr, $pos);
    if ($endPos === false) {
        echo 'Mal';
    }
}

//Longitud del string a sacar
$len = $endPos - $pos;


//Mostrar el string delimitado

echo substr($string, $pos, $len);

















