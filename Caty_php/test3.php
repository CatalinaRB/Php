<?php
$personas = array("Ana", "Camila", "Pepe", "Juan", "Samantha");
$premios = array("Bicicleta", "Pileta", "Patineta");
$cantidad = count($personas) - 1;

foreach ($premios as $sp) {
    while (1) {
        $sorteo = rand(0, $cantidad);
        if ($personas[$sorteo] != "0") {
            $premiados[$sp] = $personas[$sorteo];
            $personas[$sorteo] = "0";
            break;
        }
    }
}

foreach ($premiados as $item => $sp) {
    print("Premio: " . $item . " Ganador: " . $sp);
    echo "<br>";
}

echo "<br>";

foreach ($personas as $sp) {
    print(" - " . $sp);
}