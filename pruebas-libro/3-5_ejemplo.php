<?php
$oxo = array(  // creamos un array con los valores "x", "o" y "x"
    array('x', ' ', 'o'), // la primera fila del array
    array('o', 'o', 'x'), // la segunda fila del array
    array('x', 'o', '')); // la tercera fila del array
echo $oxo[1][2]; // mostramos el valor de la segunda fila y tercera columna del array
?>
