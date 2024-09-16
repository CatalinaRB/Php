
<!doctype html>
<html>
<head>
    <title>Edad</title>
    <meta charset="UTF-8"/>
</head>
<body>
<?php
//imprimir una tabla de multiplicar con for()
//luego mejorar para imprimir todas las tablas del 1 al 10
for ($x = 1; $x <= 10; $x++) {
    echo "<h2>Tabla del $x</h2>";
    for ($y = 1; $y <= 10; $y++) {
        echo "$x x $y = " . ($x * $y) . "<br>";
    }
    echo "<br>"; 
}
?>

?>
</body>
</html>
