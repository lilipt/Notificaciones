<?php
$nombre=$_POST['nombre'];

if(isset($nombre)){
	include ('Conexion.php');
  $sql=mysql_query("INSERT INTO categorias VALUES('','$nombre')");
  $cuenta=mysql_num_rows($sql);
  if($cuenta >0){
  echo 2;

  }else{
  	echo1;
  }
}else{

echo 0;

}

?>