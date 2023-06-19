<?php

require "../connection.php" ; 

$id= $_GET['id'];

// $sql = "SELECT  * FROM empleado WHERE idEmpleado=$id"; 
$sql = "SELECT e.*, c.carNombre FROM empleado e INNER JOIN cargos c ON e.empCargo = c.idCargo WHERE(e.idEmpleado = $id)";

$consulta = $objConexion->query($sql);


if($consulta){ 

  $empleado= mysqli_fetch_assoc($consulta); 



  $sql2 = "SELECT * FROM cargos WHERE idCargo = $empleado[empCargo] ";



  $consulta2 = $objConexion->query($sql2);



?>

<html>

  <head>
    
    <link rel="stylesheet" type="text/css" href="../css/index.css">

  </head>

 <body>


  <form method="post">

        
        <input type="hidden" name="txtid" value="<?php echo $empleado['idEmpleado']?>"></input>

        <label for="identificacion">Identificación:</label>
        <input type="text" id="identificacion" name="identi" required value="<?php echo $empleado['empIdentificacion']?>"><br><br>


        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required value="<?php echo $empleado['empNombre']?>"><br><br>
        
        <label for="fecha_ingreso">Fecha de ingreso:</label>
        <input type="date" id="fecha_ingreso" name="fechaingreso" required value="<?php echo $empleado['empFechaIngreso']?>"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required value="<?php echo $empleado['empCorreo']?>"><br><br>


        <label for="genero">Genero:</label>
        <select id="genero" name="genero">
          <option value="" disabled selected>Seleccione</option>
          <option value="masculino"<?php echo ($empleado['empGenero'] == 'Masculino') ? 'selected' : ''; ?>>Masculino</option>
          <option value="femenino"<?php echo ($empleado['empGenero'] == 'Femenino') ? 'selected' : ''; ?>>Femenino</option>
        </select><br><br>
        

        <label for="cargo">Cargo:</label>
        <select id="cargo" name="cargo">
        <option value=""></option>
            <?php
            
              
              include "../cargo/consulta.php";

              while ($fila = mysqli_fetch_assoc($consulta2)) {

                $idcar=$fila['idCargo'];
            
                $nombrecar=$fila['carNombre'];
            
                echo "<option value='$idcar' selected '>$nombrecar</option>";
            
            }
      
            ?>
        </select><br><br> 

      <div class="center">

      <a class="botonvolver" href="../empleado/listaremp.php">Volver</a>


      <input type="submit" value="Enviar" name="enviar">


    </div>
   </form>
 </body>
</html> 
<?php } ?>
<?php

if(isset($_POST['enviar'])){

$ide= $_POST['txtid'];

echo $ide ; 

$identi = trim($_POST['identi']); 

$name = trim($_POST['nombre']); 

$email = trim($_POST['email']); 

$fecha = $_POST['fechaingreso'];

$cargo = $_POST['cargo'];

$genero = $_POST['genero'];

echo $cargo ;

$consulta1 = "UPDATE empleado SET empIdentificacion='$identi', empNombre='$name', empFechaIngreso='$fecha', empCorreo='$email', empGenero='$genero', empCargo='$cargo' WHERE idEmpleado=$ide";

echo $consulta1 ;

$resultado = $objConexion->query($consulta1) ;

echo $resultado ; 

if($resultado){

  header("location:../empleado/listaremp.php"); 
  exit(); 

}
else{

    echo "<h3>Ha ocurrido un error: " . mysqli_error($objConexion) . "</h3>";


}

}

?>