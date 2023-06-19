<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulario empleado</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/index.css">

</head>
<body>
    
    <h2>Formulario de cargo</h2>
  
    <form method="post">

      <label for="Nombrecargo">Nombre cargo:</label>
      <input type="text" id="Nombrecargo" name="nombrecargo" required><br><br>


      <label for="sueldo">sueldo:</label>
      <input type="text" id="sueldo" name="sueldo" required><br><br>

      <div class="center">



      <button class="botonvolver" onclick="window.location.href = '../index.html'">Volver</button>

      <input type="submit" value="Enviar" name="enviar">


      </div>

    </form>

    <?php

      include("indexcargo.php"); 
    
    ?>

</body>
</html>