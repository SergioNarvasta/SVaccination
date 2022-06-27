<?php
    include("conexion.php");

    $archivo = $_FILES["file"]["tmp_name"];

    $sqlMajor = "";
    // open the file and save the rows into an array
    $fila = file($archivo);
    foreach ($fila as $registro) {
       list($paterno, $materno, $nomb, $esc, $sex, $cel, $mail, $participante) = explode(";", $registro);
       $sql = "
         insert into 
            alumno(paterno,materno,nombre,idescuela,sexo,celular,correo,idtipoparticipante) 
            values ('$paterno', '$materno', '$nomb', $esc,
                    '$sex', '$cel', '$mail', $participante); ";
        
        mysql_query($sql, $cn);
        $sqlMajor .= $sql;
    }
    mysql_close($cn);
    header("location: index.php");
?>