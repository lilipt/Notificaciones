<?php
include ('Conexion.php');

$sql=mysql_query("SELECT * FROM publicidad");
while($row=mysql_fetch_array($sql)){

 echo "<div>";

 echo $row['titulo'];
 echo $row['img'];
 echo $row['descr'];
 echo $row['fecha'];

 echo "</div>";

}

?>