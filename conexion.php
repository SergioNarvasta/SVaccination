<?php
class Conexion{
    function conexionBD(){
        /*$host = "localhost";
        $dbname = "BDSystemV";
        $username = "root";
        $password = "";
        $puerto = "1433";*/

        try{
        $con = new PDO("sqlsrv:server=DESKTOP-2NA2N4M\SQLEXPRESS;database=BDSystemV",root,root);
        echo "Conexion establecida";

        }catch(PDOException $exp){
            echo ("Eror de conexion con BD $dbname, error $exp");
        }
        return $con;
    }
}

?>