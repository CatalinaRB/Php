<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Array 2</title>
</head>
<body>

<?php
$edades = array("Camila"=>"25", "Samanta"=>"17");
echo "Camila tiene " . $edades['Camila'] . " años.";
echo "<br>";
foreach($edades as $x => $valor) {
  echo "Clave=" . $x . ", valor=" . $valor;
  echo "<br>";
}
?>

</body>
</html>