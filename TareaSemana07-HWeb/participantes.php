<?php
    include("cabecera.php");
    include("conexion.php");
    $sql = "select * from participante";

    $f = mysql_query($sql, $cn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participantes</title>
</head>
<body>
    <div class="report">
        <table>
            <tr>
                <td>ID</td>
                <td>Tipo Participante</td>
                <td>Accion</td>
            </tr>
            <?php
                while ($r = mysql_fetch_array($f)) {        
            ?>
            <tr>
                <td><?php echo $r["idtipoparticipante"] ?></td>
                <td><?php echo $r["tipoparticipante"] ?></td>
                <td><a href="editar-tipoparticipante.php?participante=<?php echo $r["idtipoparticipante"] ?>" target="_self">EDITAR</a></td>
            </tr>
            <?php
                }
            ?>
        </table>
        <a href="agregar-tipoparticipante.php">AGREGAR TIPO PARTICIPANTE</a>
    </div>
    <?php
        
    ?>
</body>
</html>