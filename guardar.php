<?php
 $server="localhost";
$user="root";
$pass="";
$db="info";

$con=mysqli_connect($server,$user,$pass,$db) or die ("problema al conectar ");
mysqli_select_Db($con,$db) or die ("problema al conectar con la base de datos");
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$mensaje=$_POST['mensaje'];
$sql="INSERT INTO datos VALUES ('$nombre'
                               '$telefono'
                               '$correo'
                               '$mensaje')";
$ejecutar=mysqli_query($con,$sql);
  	if (!$ejecutar) {
  	echo "hubo algun error";
  	}else{
  	echo "Datos guardados correctamente";
  }
                               
?>