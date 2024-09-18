<?php
include "vars.php";

$conexion = new mysqli($host, $user, $password, $database, $sport);

if ($conexion->connect_error) {
    echo "No se pudo conectar " . $conexion->connect_error;
} else {
    echo "Conexion OK" . $conexion->host_info;
}
?>