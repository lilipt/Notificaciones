<?php
$registro=$_POST['noRegistro'];
$nombre=$_POST['nombre'];
$ubicacion=$_POST['ubicacion'];
$correo=$_POST['correo'];
$clave=$_POST['clave'];
$admin=$_POST['admin'];
$categoria=$_POST['categoria'];

if(!isset($correo) && $correo != " "){
	include ('Conexion.php');
$sql=mysql_query("INSERT INTO institucion Values ('','$registro','$nombre','$ubicacion','$correo','$clave','$admin','$categoria')");

	echo 1;


}else{
	echo 0;
}
?>