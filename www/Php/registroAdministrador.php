<?php
$pass = $_POST['clave'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$clave=$_POST['clave'];

if(isset($email)){
	include ('Conexion.php');
   $sql=mysql_query("INSERT INTO administrador Values('','$nombre','$email','$clave')");
   $cuenta=mysql_num_rows($sql);
  if($cuenta>0){

   echo 2;

  }else{
  	echo 1;
  }

}else{
echo 0;
}
?>