<?php
if(isset($_POST)) {
    $autor = $_POST['autor'];
    $titulo = $_POST['titulo'];
    // Aquí el nick es estático porque aún no se implementa sesión
    $nick = 'moios';
}

include "conexion.php";

$sql_insertar = "INSERT INTO cancion VALUES (DEFAULT, '$autor', '$titulo', '$nick')";

$conexion->query($sql_insertar);

// Una vez insertado, volver al dashboard
header("Location: /dashboard.php");
exit;
?>