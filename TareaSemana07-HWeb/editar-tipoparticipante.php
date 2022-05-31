<?php
    include('cabecera.php');
    include('conexion.php');
    $id = $_GET["participante"];
    $sql = "select * from participante where idtipoparticipante = '$id'";
    $f = mysql_query($sql, $cn);
    $r = mysql_fetch_array($f);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tipo Participante</title>
</head>
<body>
    <form action="i-editar-tipoparticipante.php" method="post">
        <input type="hidden" name="idtipoparticipante" value="<?php echo $r["idtipoparticipante"] ?>">
        <label for="input_tipoparticipante">Tipo participante:</label>
        <input type="text" name="tipoparticipante" id="input_tipoparticipante" value="<?php echo $r["tipoparticipante"] ?>">
        <button type="submit">Guardar Tipo Participante</button>
    </form>
</body>
</html>