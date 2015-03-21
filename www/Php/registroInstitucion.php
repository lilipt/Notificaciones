<?php
$registro=$_POST['noRegistro'];
$nombre=$_POST['nombre'];
$ubicacion=$_POST['ubicacion'];
$correo=$_POST['correo'];
$clave=$_POST['clave'];
$admin=$_POST['admin'];
$categoria=$_POST['categoria'];

if(isset($correo)){
	include ('Conexion.php');
$sql=mysql_query("INSERT INTO institucion Values ('','$registro','$nombre','$ubicacion','$correo','$clave','$admin','$categoria')");
$cuenta= mysql_num_rows($sql);
if($cuenta>0){

	echo 2;
}else{

	echo 1;
}

}else{
	echo 0;
}
?>