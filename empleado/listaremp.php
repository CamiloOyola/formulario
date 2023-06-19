<?php

    require "../connection.php" ; 


    
    $sql = "SELECT e.idEmpleado, e.empIdentificacion , e.empNombre , e.empCorreo, empFechaIngreso , c.carNombre , c.carSueldo FROM EMPLEADO e , CARGOS c where( e.empCargo = c.idCargo)" ; 
    
    $resultado = $objConexion->query($sql) ; 

?>
<html>

    <head>

        <link rel="stylesheet" type="text/css" href="../css/index.css">

    </head>

    <body>

        <h1 align= "center">listar empleado</h1>

        <table width= "89%" border = "0" align= "center">
            <tr align = "center" bgcolor= "lightblue">
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
            <tr bgcolor="lightgrey">
            <td ><?php echo $empleado->empIdentificacion?></td>
            <td ><?php echo $empleado->empNombre?></td>
            <td ><?php echo $empleado->empCorreo?></td>
            <td ><?php echo $empleado->empFechaIngreso?></td>
            <td ><?php echo $empleado->carNombre?></td>
            <td ><?php echo $empleado->carSueldo?></td>
            <td align= "center">
             <a href="editar.php?id=<?php echo $empleado->idEmpleado ?>"><img src="../imagenes/pencil.svg" width="29" height="24"></a>
            </td>
            <td align= "center">
             <a href="eliminar.php?id=<?php echo $empleado->idEmpleado ?>"><img class="btneliminar" src="../imagenes/trash.svg" width="29" height="24"></a>
            </td>
            </tr>
            <?php
            }
            ?>
        </table>

        <div class="center">

            <button class="botonvolver1" onclick="window.location.href = '../index.html'"><</button>

        </div>



    </body>


</html>