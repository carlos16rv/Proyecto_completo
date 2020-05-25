<?php
$s="localhost";
$bd="rive";
$u="root";
$p="";
$conectar=new mysqli($s,$u,$p,$bd);
if (!$conectar) {
echo "No se puede conectar 1";
}else{
echo "Conectado";
}
$nombre=$_POST['nombre'];
$numero=$_POST['numero'];
$correo=$_POST['correo'];
$mensaje=$_POST['mensaje'];
$sql="INSERT INTO rive VALUES ('$nombre', '$numero','$correo','$mensaje')";

$ejecutar=mysqli_query($conectar, $sql);
if (!$ejecutar) {
echo "Hubo error";
}
else{
echo "<br>Datos guardados se enviara una confirmacion tan pronto sea posible <br><a href='index.html'>Volver</a>";
}
?>