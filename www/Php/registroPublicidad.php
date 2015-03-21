<?php
$titulo=$_POST['titulo'];
$descripcion=$_POST['descripcion'];
$imagen=$_POST['imagen'];
$fecha=$_POST['fecha'];
$institucion=$_POST['intitucion'];
$categoria=$_POST['categoria'];

if(iiset($titulo)){
	include ('Conexion.php');

	$sql=mysql_query("INSERT INTO publicidad VALUES('','$titulo','$descripcion','$imagen','$fecha','$institucion','$categoria')");
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