<?php
$nombre=$_POST['nombre'];
$idCat=$_POST['categoria'];
if(isset($nombre)){
	include ('Conexion.php');
$sql=mysql_query("INSERT INTO subcategoria Values('','$nombre','$idCat')");
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