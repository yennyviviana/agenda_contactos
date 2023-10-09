<?php

//estos son los datos para conectar a mysql
$servidor = 'localhost';
$usuario = 'root';
$clave = '';
$based = 'agenda_contactos';

//funcion que nos conecta a mysql
$conexion = mysqli_connect($servidor, $usuario, $clave) or die('No se conecto a mysql');

//conectar a la base de datos
mysqli_select_db($conexion, $based) or die('No se conecto a la base de datos  agenda_contactos');

//utf8 para todos los símbolos salgan bien
if (!mysqli_set_charset($conexion, 'utf8')) {
    die('Error al establecer la codificación de caracteres UTF-8: ' . mysqli_error($conexion));
}
















?>