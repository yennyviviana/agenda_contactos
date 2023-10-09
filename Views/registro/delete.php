<?php
$llave = $_GET['lla'];

// Crear la sentencia SQL para eliminar el registro
$ejecutarBorrar = "DELETE FROM registro WHERE id = '$llave'";

$borrar = new Sen($ejecutarBorrar, $conexion, 'registro');
$borrar->insedbo();

header("Location: main.php?da=1");





?>