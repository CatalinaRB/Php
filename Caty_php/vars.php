<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    $_SESSION['usuario'] = "Anonimo";  // Usuario por defecto
}

$usuario = $_SESSION['usuario'];
?>
