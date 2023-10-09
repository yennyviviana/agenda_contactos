<?php
session_start();


//echo $_SESSION['usuario'];
if(isset($_SESSION['usuario']) && $_SESSION['usuario'] != "") {
	$ConUsuario = "SELECT * FROM usuario WHERE id = ".$_SESSION['usuario'];
	$resultado = new Sen($ConUsuario, $conexion, 'usuario');
	$resultado->ejecutarConsulta();
	
	$usuario = mysqli_fetch_array($getesultado->ejecutarConsulta());
}else {
	/*header("Location: index.php");*/	
}
?>
