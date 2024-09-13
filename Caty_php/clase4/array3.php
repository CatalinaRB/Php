<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Array 2</title>
</head>
<body>
<?php
$productos = array(
    array("Heladera", 2500000, 18),
    array("Microonda", 1500000, 9),
    array("Cocina", 590000, 21),
    array("Licuadora", 450000, 15),
    array("Mixer", 260000, 5),
    array("Ventilador", 150000, 15)
);

// Imprimir todos los valores
echo "<h2>Todos los productos:</h2>";
echo "<table border='1'>";
echo "<tr><th>Nombre</th><th>Precio</th><th>Cantidad</th></tr>";
foreach ($productos as $producto) {
    echo "<tr>";
    foreach ($producto as $valor) {
        echo "<td>" . htmlspecialchars($valor) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

// Imprimir solo los productos con PRECIO < 1800000
echo "<h2>Productos con precio menor a 1,800,000:</h2>";
echo "<table border='1'>";
echo "<tr><th>Nombre</th><th>Precio</th><th>Cantidad</th></tr>";
foreach ($productos as $producto) {
    if ($producto[1] < 1800000) { // $producto[1] es el precio
        echo "<tr>";
        foreach ($producto as $valor) {
            echo "<td>" . htmlspecialchars($valor) . "</td>";
        }
        echo "</tr>";
    }
}
echo "</table>";
?>
</body>
</html>
