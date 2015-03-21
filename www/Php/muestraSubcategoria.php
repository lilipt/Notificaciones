<?php
include ('Conexion.php');
$cat=$_POST]['id'];
$sql=mysql_query("SELECT * from subcategoria where idCategoria== $cat");

while($row=mysql_fetch_array($sql)){

  echo "<option value=".$row['id']">".$row['nombre'].";</option>";

}

?>