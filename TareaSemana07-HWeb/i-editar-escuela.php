<?php
    include("conexion.php");

    $idescuela = $_POST["idescuela"];
    $escuela = $_POST["nombreescuela"];

    $sql = "update escuela
            set escuela = '$escuela'
            where idescuela = $idescuela";

    mysql_query($sql, $cn);

    header("location: escuelas.php")
?>