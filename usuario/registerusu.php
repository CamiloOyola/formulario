<?php 

//include("../connection.php"); 

function procesarFormulario($usu, $contra, $Conexion) {

    $consulta = "INSERT INTO usuario(usuLogin, usuPassword) VALUES ('$usu', '$contra')";
    $resultado = mysqli_query($Conexion, $consulta);

    return $resultado;
}

if(isset($_POST['enviar'])){


    $usu = trim($_POST['cargo']); 

    $contra = trim($_POST['contrasena']); 

    $resultado = procesarFormulario($usu, $contra , $objConexion);

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