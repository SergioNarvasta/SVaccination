<?php
    $escuela = $_POST["nombre"];

    include("conexion.php");

    $sql = "insert into escuela(escuela) values('$escuela')";
    mysql_query($sql, $cn);

    header("location: escuelas.php");
?>