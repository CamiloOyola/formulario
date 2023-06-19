<?php 

function Conectar() {

    $conex = mysqli_connect("localhost" , "root" , "" , "prueba1"); 

    if ($conex->connect_errno){
        
        echo "No hay conexion: ".$conex->connect_error ;
    }else{

        return $conex ; 

    }
    
}


$objConexion = Conectar();


?>