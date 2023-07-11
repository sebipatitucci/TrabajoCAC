<?php 

$conexion = mysqli_connect("localhost", "root", "", "codoacodo");
if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
    echo"no se pudo conectar la bd";
  }

?>