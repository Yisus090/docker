<?php
include 'conexion.php';
$consulta = mysqli_query($mysqli, "SELECT * FROM persona");
while ($row = mysqli_fetch_array($consulta)) {
   
    echo "<td>" . $row['nombre_persona'] . "</td>";

}
?>