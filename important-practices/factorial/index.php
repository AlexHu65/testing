<?php
/* Creamos la variable con el número que deseamos y lo mostramos por pantalla */

$numero = 5;
echo 'El factorial del numero: ' . $numero;

/* Creamos la función con un bucle for decreciente, recorremos $numero y que nos devuelve el resultado en la variable $total */

function factorial($numero)
{
    $total = 1;
    for ($i = $numero; $i >= 1; $i--) {
        $total = $total * $i;
    }
    return $total;
}

/* LLamamos a la función y la mostramos por pantalla */

$resultado = factorial($numero);
echo 'Da como resultado: ' . $resultado;
?>