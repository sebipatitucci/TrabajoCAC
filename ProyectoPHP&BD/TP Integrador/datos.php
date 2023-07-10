<link rel="stylesheet" href="datos.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<?php

include("conexion.php");

$consulta = "SELECT * FROM clientes order by id desc";

$resultado = mysqli_query($conexion, $consulta);
?>
<div class="container">
    <a href="tickets.php" id="volver">VOLVER</a>
<table class="table table-hover">

    <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Correo</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Categoria</th>
    </tr>

    <?php
    foreach ($resultado as $i) {
    ?>

        <tr>
            <td><?php echo $i['nombre'] ?></td>
            <td><?php echo $i['apellido'] ?></td>
            <td><?php echo $i['correo'] ?></td>
            <td><?php echo $i['cantidad'] ?></td>
            <td><?php echo $i['categoria'] ?></td>
        </tr>



    <?php
    }

    ?>
</table>
</div>