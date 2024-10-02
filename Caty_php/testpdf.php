<?php
require 'vendor/autoload.php';

use Dompdf\Dompdf;

// Datos que deseas pasar al HTML
$titulo = "Reporte de Ciudades";
$ciudades = ['Asunción', 'Encarnación', 'Villarrica', 'Ciudad del Este'];

// Crear el HTML directamente en el script PHP
$html = '
<!DOCTYPE html>
<html>
<head>
    <title>Reporte de Ciudades</title>
    <style>
        body { font-family: Arial, sans-serif; }
        h1 { color: #4CAF50; }
        table { width: 100%; border-collapse: collapse; }
        table, th, td { border: 1px solid black; padding: 8px; text-align: left; }
    </style>
</head>
<body>
    <h1>' . $titulo . '</h1>
    <table>
        <thead>
            <tr>
                <th>Ciudades</th>
            </tr>
        </thead>
        <tbody>';

foreach ($ciudades as $ciudad) {
    $html .= '<tr><td>' . $ciudad . '</td></tr>';
}

$html .= '
        </tbody>
    </table>
</body>
</html>';

// Inicializar Dompdf y cargar el HTML
$dompdf = new Dompdf();
$dompdf->loadHtml($html);

// (Opcional) Configurar el tamaño del papel y la orientación
$dompdf->setPaper('A4', 'portrait');

// Renderizar el HTML como PDF
$dompdf->render();

// Salida del PDF al navegador
$dompdf->stream("reporte_ciudades.pdf", ["Attachment" => false]);
?>
