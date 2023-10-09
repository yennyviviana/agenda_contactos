<?php

$dato = $_GET ['da'] ;
$llave = $_GET ['lla'];


$ejecutarConsulta= "SELECT  * FROM  registro WHERE id = $llave";
$consultaCarta = new Sen($ejecutarConsulta, $conexion, 'registro');
$consultaCarta->ejecutarConsulta();

$contacto = mysqli_fetch_array($consultaCarta->getResultado()) ;

?>





  <form action="main.php?da=3&lla = <?php echo  $llave;?>" method="post" enctype="multipart/form-data">
		
		<input type="hidden" name="llave" value="<?php echo  $llave; ?>">


  <fieldset>
    <legend>Información Personal</legend>
    <div>
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre"  value = "<?php echo $nombre ['1'] ; ?>"; placeholder="Ingrese su nombre" required>
    </div>
    <div>
      <label for="telefono">Teléfono:</label>
      <input type="tel" id="telefono" name="telefono" value = "<?php echo $telefono ['2'] ; ?>";placeholder="Ingrese su teléfono" required>
    </div>
    <div>
      <label for="fecha_nacimiento">Fecha de Nacimiento:</label> <!-- Cambiado a "fecha_nacimiento" -->
      <input type="date" id="fecha_nacimiento"value = "<?php echo $fecha_nacimiento ['3'] ; ?>"; name="fecha_nacimiento" required>
    </div>
  </fieldset>

  <fieldset>
    <legend>Dirección</legend>
    <div>
      <label for="direccion">Dirección:</label>
      <input type="text" id="direccion" name="direccion" value = "<?php echo $direccion ['4'] ; ?>";placeholder="Ingrese la dirección" required>
    </div>
  </fieldset>

  <fieldset>
    <legend>Información de Contacto</legend>
    <div>
      <label for="correo_electronico">Correo Electrónico:</label> <!-- Cambiado a "correo_electronico" -->
      <input type="email" id="email" name="email" value = "<?php echo $email ['5'] ; ?>";placeholder="Ingrese su correo" required>
    </div>
  </fieldset>

 
  <button type="submit" name="submit" class="btn btn-primary" value="Guardar">Guardar</button>
</form>





<?php


// pregunta si el boton se presiono................
 if(isset($_POST ['submit']))   {
	
	// Capture data sent via POST
    $id= $_POST['id'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $direccion = $_POST['direccion'];
    $email = $_POST['email'];

    


    // Crear el SQL query para la actualización
$actualizar = "UPDATE registro SET
id = '$id'; 
nombre = '$nombre',
telefono = '$telefono',
fecha_nacimiento = '$fecha_nacimiento',
direccion = '$direccion',
email = '$email'
WHERE id = $id"; // id es la clave primaria

// Crear una instancia de la clase Sen y ejecutar la actualización
$ed = new Sen($actualizar, $conexion, 'registro');
$ed->insedbo();

   
 }



 // Crear el SQL query para la actualización
$actualizar = "UPDATE registro SET 
nombre = '$nombre',
telefono = '$telefono',
fecha_nacimiento = '$fecha_nacimiento',
direccion = '$direccion',
email = '$email'
WHERE id_registro = $id_registro"; // Asumiendo que id_registro es la clave primaria

// Crear una instancia de la clase Sen y ejecutar la actualización
$ed = new Sen($actualizar, $conexion, 'registro');
$ed->insedbo();




header("Location: main.php?da=1");

?>