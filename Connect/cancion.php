<?php
include "conexion.php";

$sql = "SELECT titulo, autor, fecha, genero 
        FROM cancion 
        WHERE usuario_nick LIKE 'moios'";

$resultado = $conexion->query($sql);
?>
<h3>Lista de canciones</h3>
<table class="table table-striped">
<?php
if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$fila["autor"]."</td>";
        echo "<td>".$fila["titulo"]."</td>";
        echo "<td>".$fila["genero"]."</td>";
        echo "<td>".$fila["fecha"]."</td>";
        echo "</tr>";
    }
} else {
    echo "No tienes canciones aún :(";
}
?>
</table>