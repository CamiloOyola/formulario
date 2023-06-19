<?php

require_once "../connection.php" ; 

$consulta1 = "SELECT idCargo,carNombre FROM cargos";

$resultado = $objConexion->query($consulta1);


while ($fila = mysqli_fetch_assoc($resultado)) {
    $idcar=$fila['idCargo'];

    $nombrecar = $fila['carNombre'];

    echo "<option value='$idcar'>$nombrecar</option>";

  }

?>