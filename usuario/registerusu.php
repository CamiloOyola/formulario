<?php 

//include("../connection.php"); 


if(isset($_POST['enviar'])){


    $usu = trim($_POST['cargo']); 

    $contra = trim($_POST['contrasena']); 

   // $resultado = procesarFormulario($usu, $contra , $objConexion);



    $consulta = "INSERT INTO usuario(usuLogin, usuPassword)VALUES('$usu' , '$contra')"; 



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