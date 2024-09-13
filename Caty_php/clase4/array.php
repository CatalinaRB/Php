<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Arreglos</title>
</head>
<body>

<?php
$dia[0] = "domingo";
$dia[1] = "lunes";
$dia[2] = "martes";
$dia[3] = "miércoles";
$dia[4] = "jueves";
$dia[5] = "viernes";
$dia[6] = "sábado";

$mes = array("enero", "febrero", "marzo");

// mostrar el viernes
echo $dia[5];
echo "<br>";
// Imprimir: febrero
echo $mes[1];
echo "<br>";

?>
<?php


$autos = array("Volvo", "BMW", "Toyota");

for($x = 0; $x < count($autos); $x++) {
  echo $autos[$x];
  echo "<br>";
}
?>

</body>
</html>