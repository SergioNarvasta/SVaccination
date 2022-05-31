<?php
    include("cabecera.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Escuela</title>
</head>
<body>
    <div>
        <form action="i-agregar-escuela.php" method="post">
            <label for="nombre">Escuela: </label>
            <input type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre de la escuela">
            <button type="submit">Agregar Escuela</button>
        </form>
    </div>
</body>
</html>