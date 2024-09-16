<?php

$var = '';

// Esto evaluará a TRUE así que el texto se imprimirá.
if (isset($var)) {
    echo "Esta variable está definida, así que se imprimirá";
}

// En los siguientes ejemplo usaremos var_dump para imprimir
// el valor devuelto por isset().

$a = "prueba";
$b = "otra prueba";

var_dump(isset($a));   
echo "<br>";    // TRUE
var_dump(isset($a, $b));
echo "<br>";  // TRUE

unset ($a);
echo "<br>"; 
var_dump(isset($a)); 
echo "<br>";     // FALSE
var_dump(isset($a, $b)); 
echo "<br>"; // FALSE

$foo = NULL;
var_dump(isset($foo));   // FALSE
echo "<br>"; 
?>