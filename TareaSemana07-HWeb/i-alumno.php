<?php
    $esc = $_POST["escuela"];
    $nomb = $_POST["nombre"];
    $matern = $_POST["materno"];
    $patern = $_POST["paterno"];
    $sex = $_POST["sexo"];
    $cel = $_POST["celular"];
    $mail = $_POST["mail"];
    $participante = $_POST["tipoparticipante"];

    include("conexion.php");

    $sqlQuery = "
        insert into 
            alumno(paterno,materno,nombre,idescuela,sexo,celular,correo,idtipoparticipante) 
            values ('$patern', '$matern', '$nomb', $esc,
                    '$sex', '$cel', '$mail', $participante)";

    mysql_query($sqlQuery, $cn);
    mysql_close($cn);

    header("location: index.php");


?>