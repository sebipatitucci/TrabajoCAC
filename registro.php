<?php 

include("conexion.php");

  if ('POST' == $_SERVER['REQUEST_METHOD']) {
    if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['correo']) &&
        isset($_POST['cantidad']) && isset($_POST['categoria']) ){

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $cantidad = $_POST['cantidad'];
        $categoria = $_POST['categoria'];

        $consulta = "INSERT INTO clientes (nombre , apellido, correo, cantidad, categoria) 
                    VALUES ('$nombre', '$apellido', '$correo','$cantidad','$categoria')";

        $resultado = mysqli_query($conexion, $consulta);
        
    header("refresh: 3, tickets.php");       
    }
}
?>