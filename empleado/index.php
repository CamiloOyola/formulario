<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulario empleado</title>
    <meta charset="UTF-8">

    <script>

    function redireccionar() {
      var selectElement = document.getElementById("cargo");
      var selectedOption = selectElement.options[selectElement.selectedIndex].value;
      
      if (selectedOption === "../cargo/registcargo.php") {
        window.location.href = selectedOption;
      }
    }

    </script>
    <link rel="stylesheet" type="text/css" href="../css/index.css">
</head>
<body>
    
    <h2>Formulario de Empleado</h2>
  
    <form method="post">

      <label for="identificacion">Identificación:</label>
      <input type="text" id="identificacion" name="identi" required><br><br>


      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required><br><br>
      
      <label for="fecha_ingreso">Fecha de ingreso:</label>
      <input type="date" id="fecha_ingreso" name="fechaingreso" required><br><br>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br><br>
      
      <label for="genero">Genero:</label>
      <select id="genero" name="genero">
        <option value="" disabled selected>Seleccione</option>
        <option value="masculino">Masculino</option>
        <option value="femenino">Femenino</option>

      </select><br><br>

      <label for="cargo">Cargo:</label>
      <select id="cargo" name="cargo" onchange="redireccionar()">
        <option value="" disabled selected>Seleccione</option>
        
        <?php
          include("../cargo/consulta.php"); 
        ?>

        <option value="../cargo/registcargo.php">Otro..</option>

        
      </select><br><br>  

      <div class="center">

        <button class="botonvolver" onclick="window.location.href = '../index.html'">Volver</button>


        <input type="submit" value="Enviar" name="enviar">


      </div>

    </form>

    <?php

      include("../empleado/register.php"); 
    
    ?>

</body>
</html>