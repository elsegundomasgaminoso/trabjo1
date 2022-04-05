<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../trabajo-logica/tarea.css">
  <title>Datos Personales</title>
</head>

<body>
  <h2>Ingresa tus datos:</h2>
  <form method="POST" action="">
    <input type="number" min="1" name="edad" placeholder="Ingresa tu edad" required>
    <input type="text" name="name" placeholder="Ingresa tu nombre" minlength="3" required>
    <select name="genero" id="genero">
      <option value="mujer">Mujer</option>
      <option value="hombre">Hombre</option>
    </select>
    <select name="estado" id="estado">
      <option value="">Soltero</option>
      <option value="">En relacion</option>
      <option value="">Casado</option>
      <option value="">Es complicado</option>
      <option value="">En proceso 😉</option>
      <option value="">Rechazado 😔</option>
    </select>
    <input type="submit" value="Enviar datos" name="enviar" class="enviar">

  </form>
  <?php
  //Nombre ........................
  if (isset($_POST["enviar"])) {
    echo "<h2>Tus datos son:</h2>";
    $name = $_POST["name"];
    echo 'NOMBRE: Tu nombre es ' . $name . ' ...' . ' Tienes un bonito nombre 😊';
  }
  //Edad ..........................
  if (isset($_POST["enviar"])) {
    $edad = $_POST["edad"];
    echo '<br><br>EDAD: Tienes ' . $edad . ' años';
    if ($edad < 18 && $edad > 0) {
      echo '...' . 'Lo siento, no eres mayor de edad';
    } else if ($edad > 80 && $edad < 105) {
      echo '...' . 'Estamos viejosssss 😩';
    } else if ($edad >= 105) {
      echo '...' . 'No aceptamos fantasmas';
    }
  }
  //Genero ........................
  if (isset($_POST["enviar"])) {
    $gene = $_POST["genero"];
    echo '<br><br>GENERO: Eres ' . $gene;
  }
  //Estado civil .................
  if (isset($_POST["enviar"])) {
    $estado = $_POST["estado"];
    echo '<br><br>ESTADO CIVIL: Estas ' . $estado;
  }


  ?>
</body>

</html>