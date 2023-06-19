<?php

require "../connection.php" ; 

$id=$_GET['id']; 

$sql= "DELETE FROM empleado WHERE idEmpleado= $id"; 

$consulta= $objConexion->query($sql);

header('location:../empleado/listaremp.php'); 

?>