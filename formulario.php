<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="store.php" method="POST">
        <label for="nombe">Nombre:</label>
        <input type="text" name="nombre">
        <br>
        <label for="correo">Correo:</label>
        <input type="email" name="correo">
        <br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>