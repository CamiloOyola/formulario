<?php 
require "../connection.php"; 

if(isset($_POST['enviar'])){
    $sueldo = trim($_POST['sueldo']); 

    $name = trim($_POST['nombrecargo']); 


    $consulta = " INSERT INTO cargos(carNombre, carSueldo) 
    VALUES ('$name' , '$sueldo')"; 

    $resultado = mysqli_query($objConexion,$consulta); 

    if($resultado){

        ?>
    
            <h3 class="success-bar">¡Datos registrados exitosamente!</h3>
        

        <?php

    }
    else{

        echo "<h3>Ha ocurrido un error: " . mysqli_error($Conexion) . "</h3>";


    }
    


}


?>