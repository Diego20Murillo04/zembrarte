<?php

require 'conexion.php';

if (
    isset($_POST['enviar'])
){
    if (
        isset($_POST['nombres'])>=1 &&
        strlen($_POST['correo'])>=1 &&
        strlen($_POST['telefono'])>=1 &&
        strlen($_POST['mensaje'])>=1
    ){
        $nombres = $_POST['nombres'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $mensaje = $_POST['mensaje'];

        $insert = "INSERT INTO contacto (nombres, correo, telefono, mensaje) VALUES ('$nombres','$correo','$telefono','$mensaje')";
        $query = mysqli_query($connect, $insert);

        if ($query){
            ?>
            <script>
                alert('Hecho');
                location.href = '../index zembrarte.html';
            </script>
            <?php
        }else{
            ?>
            <script>
                alert('Error');
                location.href = '../index zembrarte.html'
            </script>
            <?php
        }
    }
}

include('conexion.php')

?>