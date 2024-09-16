
<!doctype html>
<html>
<head>
    <title>colores HTML</title>
    <meta charset="UTF-8"/>
</head>
<body>
<?php
//aqui va el code
$red = 0;
$green = 0;
$blue = 0;

while($red < 256){
    while($green < 256){
        while($blue < 256){
            print("<button style='background-color:rgb($red,$green, $blue)'>
            rgb($red, $green, $blue)</button>");
            $blue+=10;
        }
        $green+=10;
        $blue = 0;
    }
    $red+=10;
    $green = 0;
}
?>
</body>
</html>
