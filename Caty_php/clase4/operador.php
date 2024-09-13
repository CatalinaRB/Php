<?php
if ($_REQUEST['operacion'] == "suma") {
    $suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];
    echo "La suma es: " . $suma;
} else if ($_REQUEST['operacion'] == "resta") {
    $resta = $_REQUEST['valor1'] - $_REQUEST['valor2'];
    echo "La resta es: " . $resta;
} else if ($_REQUEST['operacion'] == "multiplicacion") {
    $multiplicacion = $_REQUEST['valor1'] * $_REQUEST['valor2'];
    echo "La multiplicación es: " . $multiplicacion;
} else if ($_REQUEST['operacion'] == "division") {
    if ($_REQUEST['valor2'] != 0) {
        $division = $_REQUEST['valor1'] / $_REQUEST['valor2'];
        echo "La división es: " . $division;
    } else {
        echo "No se puede dividir por cero.";
    }
}
?>
