<table class="table table-striped">

      <th>Id</th>
    <th>Nombre</th>
    <th>Telefono</th>
    <th>Fecha de nacimiento</th>
    <th>Direccion</th>
    <th>Correo electronico</th>
    <th>Acciones</th>
  </tr>

  <?php

$buscar=$_POST['buscar'];

 if (is_numeric($buscar)) {


  $consulta ="Select *  FROM registro where   nombre= 
      $buscar  ORDER BY  nombre" ;
      
      
}else {
	
   $consulta ="SELECT *  FROM  registro  WHERE   nombre LIKE '%buscar%' OR
  telefono= $buscar OR
  direccion LIKE '%buscar%'
        order by  nombre" ;
	
	
}	
?>



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


<script src="Public/js/alert.js"></script>













