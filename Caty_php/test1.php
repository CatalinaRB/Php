<?php

class Animal {
    private $nombre;
    private $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function toString() {
        return "Soy un animal " . $this->nombre;
    }
}

class Perro extends Animal {
    public function __construct($nombre, $edad) {
        parent::__construct($nombre, $edad);
    }

    // Sobrescritura
    public function getEdad() {
        return parent::getEdad() * 7;
    }

    public function toString() {
        return "Soy un perro " . parent::getNombre();
    }
}

$miPerrito = new Perro("Puppy", 4);

print($miPerrito->getNombre());
echo "<br>";
print($miPerrito->getEdad());
echo "<br>";
print($miPerrito->toString());


$miPerrito = new Perro("duggy", 4);

print($miPerrito->getNombre());
echo "<br>";
print($miPerrito->getEdad());
echo "<br>";
print($miPerrito->toString());

