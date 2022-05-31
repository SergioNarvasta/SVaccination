<?php
    $idtipoparticipante = $_POST["idtipoparticipante"];
    $tipoparticipante = $_POST["tipoparticipante"];

    include("conexion.php");

    $sql = "update participante set tipoparticipante = '$tipoparticipante' where idtipoparticipante = $idtipoparticipante";

    mysql_query($sql);

    header("location: participantes.php");
?>