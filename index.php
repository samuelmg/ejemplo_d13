<!DOCTYPE html>
<?php require 'conexion.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="formulario.php">Formulario</a>
    <?php
        $sql = "SELECT * FROM usuarios";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        // Configura los resultados como un arreglo asociativo
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        
        // $stmt->fetchAll() Obtiene el arreglo asociativo
        echo "<ul>";
        foreach ($stmt->fetchAll() as $row) {
            echo "<li>".$row['nombre']." - ".$row['correo']."</li>";
        }
        echo "</ul>";

    ?>
</body>
</html>