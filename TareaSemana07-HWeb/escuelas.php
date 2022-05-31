<?php
    include('cabecera.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escuelas</title>
</head>
<body>
    <div class="report">
        <table>
            <tr>
                <td>ID</td>
                <td>Escuela</td>
                <td>Gestionar</td>
            </tr>
            <?php
                include('conexion.php');         
                $sql = "select * from escuela";
    
                $f = mysql_query($sql, $cn);
                while($r = mysql_fetch_array($f)) {
            ?>
            <tr>
                <td><?php echo $r["idescuela"] ?></td>
                <td><?php echo $r["escuela"] ?></td>
                <td><a href="editar-escuela.php?idescuela=<?php echo $r["idescuela"]?>" class="btn-editar-escuela">EDITAR</a></td>
            </tr>
            <?php
                }
            ?>
        </table>
        <a href="agregar-escuela.php" target="_self">
            AGREGAR ESCUELA
        </a>
    </div>
</body>
</html>