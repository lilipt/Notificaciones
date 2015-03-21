<?php

include ('Conexion.php');
$sql=mysql_query("SELECT * from categorias");

while($row=mysql_fetch_array($sql)){

  echo "<option value=".$row['id'].">".$row['nombre']."</option>";

}

?>