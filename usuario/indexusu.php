<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulario empleado</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/index.css">

</head>
<body>
    
    <h2>Formulario de carg</h2>
  
    <form method="post">

      <label for="usuario">Usuario:</label>
      
      <select id="cargo" name="cargo">
      <option value="" disabled selected>Seleccione</option>
        
        <?php
          include("../usuario/consultausu.php"); 
        ?>

      </select><br><br>  

      <label for="contrasena">contraseña:</label>
      <input type="text" id="contrasena" name="contrasena" required><br><br>

      <div class="center">


        <button class="botonvolver" onclick="window.location.href = '../index.html'">Volver</button>
        

        <input type="submit" value="Enviar" name="enviar">


    </div>

    </form>

    <?php

      include("../usuario/registerusu.php"); 

    ?>

</body>
</html>