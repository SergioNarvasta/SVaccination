<?php

$server = "DESKTOP-2NA2N4M\SQLEXPRESS";
$database = "BDSystemV";
$username = "Sergio";
$password = "1234";  

  class Conexion{
    
    function conexionBD(){   
        try{
        $conexion = new PDO("sqlsrv:server=$server;database=$database,$username,$password");
        echo "¡Conexion establecida!";
        }catch(PDOException $exp){
            echo ("Eror de conexion con BD $database, error $exp");
        }
        return $conexion;
    }
}

?>