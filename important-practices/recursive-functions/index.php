<?php
/**
 * Created by PhpStorm.
 * User: alejandro.chavez
 * Date: 6/28/2017
 * Time: 9:24 AM
 */


function desdeHasta($d, $h)
{
    if ($d == $h) {
        echo "Ultima vuelta, $d es igual a $h <br />";

    } else {

        echo "Desde: $d hasta: $h <br />";
        desdeHasta($d+1, $h);

    }

}

desdeHasta(5, 10);