


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contactos Dashboard</title>
    <link href="Public/css/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>


<div id="formulario">

  <form action="main.php?da=2" method="post" enctype="multipart/form-data">


  <form action="main.php?da=2" method="post" enctype="multipart/form-data">
  <fieldset>
    <legend>Información Personal</legend>
    <div>
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre" required>
    </div>
    <div>
      <label for="telefono">Teléfono:</label>
      <input type="tel" id="telefono" name="telefono" placeholder="Ingrese su teléfono" required>
    </div>
    <div>
      <label for="fecha_nacimiento">Fecha de Nacimiento:</label> <!-- Cambiado a "fecha_nacimiento" -->
      <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
    </div>
  </fieldset>

  <fieldset>
    <legend>Dirección</legend>
    <div>
      <label for="direccion">Dirección:</label>
      <input type="text" id="direccion" name="direccion" placeholder="Ingrese la dirección" required>
    </div>
  </fieldset>

  <fieldset>
    <legend>Información de Contacto</legend>
    <div>
      <label for="correo_electronico">Correo Electrónico:</label> <!-- Cambiado a "correo_electronico" -->
      <input type="email" id="email" name="email" placeholder="Ingrese su correo" required>
    </div>
  </fieldset>

 
  <button type="submit" name="submit" class="btn btn-primary" value="Guardar">Guardar</button>
</form>


<script src="Public/js/script.js"></script>

<?php

// Check if the form submit button was pressed
if (isset($_POST['submit'])) {

  // Capture data sent via POST
 
  $nombre = $_POST['nombre'];
  $telefono = $_POST['telefono'];
  $fecha_nacimiento = $_POST['fecha_nacimiento'];
  $direccion = $_POST['direccion'];
  $email = $_POST['email'];

  // Create the SQL query
  $insertar = "INSERT INTO registro (nombre, telefono, fecha_nacimiento, direccion, email)
              VALUES ('$nombre', '$telefono', '$fecha_nacimiento', '$direccion', '$email')";
$ins = new Sen ($insertar, $conexion,'registro');
$ins->insedbo();



}




?>