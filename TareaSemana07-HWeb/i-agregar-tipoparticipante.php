<?php
    $tipoparticipante = $_POST["tipoparticipante"];

    include("conexion.php");

    $sql = "insert into participante(tipoparticipante) values('$tipoparticipante')";

    mysql_query($sql, $cn);

    header("location: participantes.php")
?>