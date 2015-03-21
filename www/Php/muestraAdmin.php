<?php
include('Conexion.php');
$sql=mysql_query("SELECT * FROM administrador");
echo "<select>";
while ($row = mysql_fetch_array($sql)){
	

echo "<option value=".$row['id'].">".$row['nombre']."</option>";

}
echo "</select>";
?>