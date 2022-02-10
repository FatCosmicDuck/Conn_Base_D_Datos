<?php
    include("conexion.php");
    $alumnos = "SELECT * FROM alumnos";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="estilos.css">
        <title>Inicio</title>
    </head>
    <body>
        <a href="index.php">
            <button type="button" class="button">Inicio</button>
        </a>
        <a href="formulario.php">
            <button type="button" class="button">Formulario</button>
        </a>

        <h1>Inicio</h1>

        <div class="container-table">
            <div class="table__title">Datos de Alumnos</div>
            <!--<div class="table__row">-->
                <div class="table__header">ID</div>
                <div class="table__header">Nombre</div>
                <div class="table__header">Apellido</div>
                <div class="table__header">Correo</div>
                <div class="table__header">Mensaje</div>
            <!--</div>-->
            
            <!--<div class="table__row">-->
                <?php $resultado = mysqli_query($conexion, $alumnos);
                while($row=mysqli_fetch_assoc($resultado)) { ?>
                <div class="table__item"><?php echo $row["id"]?></div>
                <div class="table__item"><?php echo $row["nombre"]?></div>
                <div class="table__item"><?php echo $row["apellido"]?></div>
                <div class="table__item"><?php echo $row["correo"]?></div>
                <div class="table__item"><?php echo $row["mensaje"]?></div>
                <?php } mysqli_free_result($resultado); ?>
            <!--</div>-->
        </div>
    </body>
</html>