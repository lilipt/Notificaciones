<?php
$nombre=$_POST['nombre'];

if(isset($nombre)){
	include ('Conexion.php');
  $sql=mysql_query("INSERT INTO categorias VALUES('','$nombre')");
  
  	echo 1;
  
}else{

echo 0;

}

?>