<?php
include 'conexion.php';
if($mysql->connect_error) {
    echo "no se pudo conectar";
}
echo "ok";
$sql= "select *from usuario";
$resultado=$mysql->query($sql);
if($resultado->num_rows > 0){
    while($r=$resultado->fetch_assoc()) {
        echo $r['NICKNAME']."<br>";
        echo $r['EMAIL']."<br>";
    
    }

}else{
    echo"nada que mostrar :(";
}
?>