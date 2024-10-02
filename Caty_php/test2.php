<?php
$meses = array("enero", "febrero", "marzo",
               "abril", "mayo", "junio",
               "julio", "agosto", "septiembre",
               "octubre", "noviembre", "diciembre");

$fecha = date("Y-m-d");
$dia = date("d");
$mes = date("n") - 1;
$año = date("Y");

echo "Hoy es: " . $dia . " de " . $meses[$mes] . " de " . $año;
