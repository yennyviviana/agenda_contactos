
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contactos Dashboard</title>
    <link href="Public/css/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<button name="button" type="button" id="button"  onclick="window.location.href = 'main.php?da=2';" >
 Ingresar nuevo contacto
</button>

<script src="Public/js/script.js"></script>


</body>
</html>






<table class="table table-striped">

      <th>Id</th>
    <th>Nombre</th>
    <th>Telefono</th>
    <th>Fecha de nacimiento</th>
    <th>Direccion</th>
    <th>Correo electronico</th>
    <th>Acciones</th>
  </tr>

<div id="buscar">

<form action="main.php?da=5" method="post">
<input type="text" name="buscar" placeholder="Ingrese datos a buscar">
 <input type="submit" name="botonbuscar" value="Buscar"> 


</form>
</div>


<br>


<?php

$consulta = "SELECT  * FROM  registro ORDER BY  id ";
$consultaCarta = new Sen($consulta, $conexion, 'registro');
$consultaCarta->ejecutarConsulta();

while ($contactos = mysqli_fetch_array($consultaCarta->getResultado())) {

    ?>


    <tr>
    <td><?php echo  $contactos['id']; ?></td>
<td><?php echo  $contactos['nombre']; ?></td>
<td><?php echo  $contactos['telefono']; ?></td>
<td><?php echo  $contactos['fecha_nacimiento']; ?></td>
<td><?php echo  $contactos['direccion']; ?></td>
<td><?php echo  $contactos['email']; ?></td>
  
      
      <td><a href="main.php?da=3&lla=<?php echo $contactos['nombre']; ?>">Editar</a></td>
      <td>
        <a href="main.php?da=4&lla=<?php echo $contactos['nombre']; ?>"
           onclick="pregunta(<?php echo $contactos['id']; ?>">Borrar</a>
      </td>
    </tr>
  <?php } ?>
</table>



<script src="Public/js/script.js"></script>


</body>
</html>












