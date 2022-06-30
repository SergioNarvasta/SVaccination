<?php
    include("cabecera.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Tipo Participante</title>
</head>
<body>



    <form action="i-agregar-tipoparticipante.php" method="post">
        <label for="input-tipoparticipante">Tipo Participante</label>
        <input type="text" name="tipoparticipante" id="input-tipoparticipante">
        <button type="submit">Agregar</button>
    </form>
    
</body>
</html>