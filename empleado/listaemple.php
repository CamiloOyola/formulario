<?php

    require "../connection.php" ; 


    
    $sql = "SELECT e.empIdentificacion , e.empNombre , e.empCorreo, empFechaIngreso , c.carNombre , c.carSueldo FROM EMPLEADO e , CARGOS c where( e.empCargo = c.idCargo)" ; 
    
    $resultado = $objConexion->query($sql) ; 

?>
<html>

    <body>

        <h1 align= "center">listar empleado</h1>

        <table width= "89%" border = "0" align= "center">
            <tr align = "center" bgcolor= "#ffff99">
            <td width= "11%">Identificacion</td>   
            <td width= "16%">Nombre</td>
            <td width= "19%">Correo</td>
            <td width= "12%">FechaIngreso</td> 
            <td width= "15%">Cargo</td>
            <td width= "10%">Sueldo</td>
            <td width= "7%">Editar</td>
            <td width= "10%">Eliminar</td> 
            </tr>

            <?php
            while( $empleado= $resultado->fetch_object() )
            {
            
            ?> 
            <tr bgcolor="#ccccff">
            <td ><?php echo $empleado->empIdentificacion?></td>
            <td ><?php echo $empleado->empNombre?></td>
            <td ><?php echo $empleado->empCorreo?></td>
            <td ><?php echo $empleado->empFechaIngreso?></td>
            <td ><?php echo $empleado->carNombre?></td>
            <td ><?php echo $empleado->carSueldo?></td>
            <td align= "center"><img src="../imagenes/editar.png" width="29" height="24"></td>
            <td align= "center"><img src="../imagenes/eliminar.png" width="29" height="24"></td>
            </tr>
            <?php
            }
            ?>
        </table>


    </body>


</html>