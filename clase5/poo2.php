<?php
class Persona {
    public $nombre;
    public $telefono;

    public function __construct($nomb, $tel) {
        $this->nombre = $nomb;
        $this->telefono = $tel;
    }

    public function obtener_datos() {
        return [
            'Nombre' => $this->nombre,
            'Telefono' => $this->telefono
        ];
    }
}

class Alumno extends Persona {
    private $grado;
    private $turno;

    public function __construct($nomb, $tel, $grado, $turno) {
        parent::__construct($nomb, $tel);
        $this->grado = $grado;
        $this->turno = $turno;
    }

    public function obtener_datos_completos() {
        $datos = parent::obtener_datos();
        $datos['Grado'] = $this->grado;
        $datos['Turno'] = $this->turno;
        return $datos;
    }
}

// Crear un array de objetos de la clase Alumno
$alumnos = [
    new Alumno("Camila", "0961123466", "Tercero-Nivel Medio", "Tarde"),
    new Alumno("Carlos", "0961123455", "Cuarto-Nivel Medio", "Mañana"),
    new Alumno("Ana", "0961123477", "Segundo-Nivel Medio", "Tarde")
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <th>Nombre</th>
        <th>Teléfono</th>
        <th>Grado</th>
        <th>Turno</th>
    </tr>
    <?php foreach ($alumnos as $alumno): 
        $datos = $alumno->obtener_datos_completos(); ?>
        <tr>
            <td><?php echo $datos['Nombre']; ?></td>
            <td><?php echo $datos['Telefono']; ?></td>
            <td><?php echo $datos['Grado']; ?></td>
            <td><?php echo $datos['Turno']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
