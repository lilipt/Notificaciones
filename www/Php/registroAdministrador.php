<?php

$nombre=$_POST['nombre'];
$email=$_POST['correo'];
$clave=$_POST['clave'];



if(isset($email)){
	include('conexion.php');
   $sql=mysql_query("INSERT INTO administrador(id, nombre, email, clave) Values('','$nombre','$email','$clave');");
   
  	echo 1;
  

}else{
echo 0;
}
?>