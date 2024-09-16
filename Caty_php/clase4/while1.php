<!doctype html>
<html>
<head>
    <title>Temperatura</title>
    <meta charset="UTF-8">
    <style>
        .estilo_mayor{
            color:red;       
        }
        .estilo_menor {
            color:orange
        }
    </style>
</head>
<body>
<?php
// A parte de for(), existe el while(): ciclo mientras
$temperatura = 0;
//a diferencia del for(), el while requiere indicar el contador o sumador
//mientras más próximo al valor 100 pintar en un tono rojo más fuerte
while($temperatura <= 100){
    echo "La temperatura es: $temperatura";
    if($temperatura <90){
        echo "<p class='estilo_menor'> $temperatura </p>";
    }else if($temperatura >=91)
    {echo "<p class='estilo_mayor'> $temperatura </p>";
    echo "<br>"; 
    
    }
$temperatura++;
}
?>
</body>
</html>