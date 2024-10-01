<?php
// Este archivo PHP calcula el Índice de Masa Corporal (IMC)

// Definimos el tipo de contenido de la respuesta como JSON
header("Content-Type: application/json");

// Obtenemos los valores de peso y estatura de la URL
$peso = $_GET['peso'];
$estatura = $_GET['estatura'];

// Validamos si los valores de peso y estatura están vacíos
if (!empty($peso) && !empty($estatura)) {
    // Convertimos la estatura de centímetros a metros
    $estatura = $estatura / 100;

    // Calculamos el IMC utilizando la fórmula estándar
    $imc = $peso / ($estatura * $estatura);

    // Redondeamos el IMC a dos decimales
    $imc = round($imc, 2);

    // Creamos una respuesta JSON con el código de estado 200 (éxito) y el valor del IMC
    respuesta(200, "Tu IMC es de $imc", $imc);
} else {
    // Si alguno de los valores está vacío, mostramos un mensaje de error
    respuesta(200, "datos no válidos", null);
}

// Función para crear una respuesta JSON
function respuesta($estado, $mensaje_estado, $datos) {
    // Cabecera HTTP
    header("HTTP/1.1 $estado $mensaje_estado");

    // Rellenamos array con estado, mensaje y datos
    $respuesta['estado'] = $estado;
    $respuesta['mensaje_estado'] = $mensaje_estado;
    $respuesta['datos'] = $datos;

    // Codificamos el JSON
    $respuesta_json = json_encode($respuesta);

    // Imprimimos el contenido del JSON
    echo $respuesta_json;
}
?>