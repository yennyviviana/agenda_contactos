<?php

class Sen {

private $sentencia;
private $conexion;
private $tabla;
private $resultado;

// Constructor
public function __construct($sentencia, $conexion, $tabla) {
    $this->sentencia = $sentencia;
    $this->conexion = $conexion;
    $this->tabla = $tabla;
}

// Ejecutar la consulta SQL
public function ejecutarConsulta() {
    $this->resultado = mysqli_query($this->conexion, $this->sentencia);
    if ($this->resultado === false) {
        die('Error en la consulta a la tabla ' . $this->tabla . ': ' . mysqli_error($this->conexion));
    }
}



public function getResultado() {
    return $this->resultado;
}





// Insertar, editar y borrar
public function  insedbo() {
    $resultado = mysqli_query($this->conexion, $this->sentencia);
    if ($resultado === false) {
        die('Error al ejecutar la operación en la tabla ' . $this->tabla . ': ' . mysqli_error($this->conexion));
    }
}
}
?>