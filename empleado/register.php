<?php 

//require("../connection.php"); 

if(isset($_POST['enviar'])){

    $identi = trim($_POST['identi']); 

    $name = trim($_POST['nombre']); 

    $email = trim($_POST['email']); 

    $fecha = $_POST['fechaingreso'];
    
    $cargo = $_POST['cargo'];

    $genero = $_POST['genero'];

    $consulta = " INSERT INTO empleado(empIdentificacion, empNombre, empFechaIngreso, empCorreo, empGenero, empCargo) 
    VALUES ('$identi' , '$name' , '$fecha' , '$email' , '$genero' , '$cargo')"; 

  

    $resultado = mysqli_query($objConexion,$consulta); 

    if($resultado){

        ?>
    
            <h3 class="success-bar">¡Datos registrados exitosamente!</h3>
        

        <?php

    }
    else{

        echo "<h3>Ha ocurrido un error: " . mysqli_error($objConexion) . "</h3>";


    }

}
?>