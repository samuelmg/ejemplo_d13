<?php
        require 'conexion.php';

        if (isset($_POST['nombre']) && isset($_POST['correo'])) {
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            // Sanitizar inputs
            // Guardar a DB
            $sql = "INSERT INTO usuarios (nombre, correo) VALUES ('".$nombre."', '".$correo."')";
            // Utilizar exec() dado que no se regresan resultados
            $conn->exec($sql);

            header('Location: index.php');
        }
    ?>