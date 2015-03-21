<?php
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$clave=$_POST['clave'];
if(isset($email)){
	include ('Conexion.php');
 $sql= mysql_query("INSERT INTO usuario Values ('','$nombre','$email','$clave')");
 

 	echo 1;
 

}else{

	echo 0;
}
?>