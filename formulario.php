<?php
    include("conexion.php");
    $alumnos = "SELECT * FROM alumnos";
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilos.css">
        <title>Formulario</title>
    </head>
    <body>
        <!-- .form>form.form-container>(.form-item col-5>(input.input+label.label))*4 -->
        <div class="content">
            <a href="index.php">
                <button type="button" class="button">Inicio</button>
            </a>
            <a href="formulario.php">
                <button type="button" class="button">Formulario</button>
            </a>

            <h1>Formulario</h1>

            <div class="form">
                <form class="form-container" action="store.php" method="POST">
                    <div class="form-item col-5">
                        <input class="input" type="text" required="required" name="name" id="name"/>
                        <label class="label" for="name">nombre</label>
                    </div>
                    <div class="form-item col-5">
                        <input class="input" type="text" required="required" name="lastname" id="lastname"/>
                        <label class="label" for="lastname">apellido</label>
                    </div>
                    <div class="form-item">
                        <input class="input" type="email" required="required" name="email" id="email"/>
                        <label class="label" for="email">correo</label>
                    </div>
                    <div class="form-item">
                        <textarea class="textarea" required="required" name="textarea" id="textarea"></textarea>
                        <label class="label" for="textarea">mensaje</label>
                    </div>
                    <div class="form-item">
                        <input class="btn-enviar" type="submit" value="Enviar"/>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>