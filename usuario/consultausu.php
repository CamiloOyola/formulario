<?php

 require "../connection.php" ; 

$consulta = "SELECT empIdentificacion,empNombre FROM empleado";

$resultado = mysqli_query($objConexion, $consulta);

while ($fila = mysqli_fetch_assoc($resultado)) {
    $idemp=$fila['empIdentificacion'];
    $nombreemp = $fila['empNombre'];
    echo "<option value='$idemp'>$nombreemp</option>";

  }



?>