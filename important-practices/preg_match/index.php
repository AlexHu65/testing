<?php
/**
 * Created by PhpStorm.
 * User: alejandro.chavez
 * Date: 6/15/2017
 * Time: 4:13 PM
 */


preg_match_all("|<[^>]+>(.*)</[^>]+>|U",
    "<b>ejemplo: </b><div align=left>esto es una prueba</div>",
    $salida, PREG_PATTERN_ORDER);
echo $salida[0][0] . ", " . $salida[0][1] . "\n";
echo $salida[1][0] . ", " . $salida[1][1] . "\n";
