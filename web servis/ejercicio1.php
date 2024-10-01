<?php
class Client {
    var $nombre;
    var $edad;
    var $ciudad;
    public function __construct() {}
}

// Crear un objeto Client
$client = new Client();
$client->nombre = "Maria";
$client->edad = 35;
$client->ciudad = "Luque";

// Imprimir propiedades en el formato deseado
echo "nombre = " . $client->nombre . "\n";
echo "edad = " . $client->edad . "\n";
echo "ciudad = " . $client->ciudad . "\n";
?>
