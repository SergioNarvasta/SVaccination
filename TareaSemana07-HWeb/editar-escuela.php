<?php
    include("cabecera.php");
    include("conexion.php");

    $idEscuela = $_GET["idescuela"];

    $sql = "select * from escuela where idescuela = $idEscuela";
    $f = mysql_query($sql, $cn);
    $r = mysql_fetch_array($f);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar escuela</title>
</head>
<body>
    <form action="i-editar-escuela.php" method="post">
        <input 
            type="hidden" name="idescuela" value="<?php echo $idEscuela?>"
        >
        <label for="nombre">Escuela:</label>
        <input type="text" name="nombreescuela" id="nombre" value="<?php echo $r["escuela"] ?>">
        <button type="submit">EDITAR</button>
    </form>
</body>
</html>