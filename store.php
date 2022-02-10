<?php
    include("conexion.php");

    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $textarea = $_POST['textarea'];

    $insert = "INSERT INTO alumnos(nombre, apellido, correo, mensaje) VALUES ('$name', '$lastname', '$email', '$textarea')";

    $result = mysqli_query($conexion, $insert);
    if($result){
        header('Location: index.php');
    }
?>