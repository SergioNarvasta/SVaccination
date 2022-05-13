<?php
class Conexion{
    function conexionBD(){
        $host = "localhost";
        $dbname = "BDSystemV";
        $username = "root";
        $password = "";
        $puerto = "1433";

        try{
        $con = new PDO("sqlrv:Server=$host,$puerto,Database=$dbname",$username,$password);
        echo "Conexion establecida";

        }catch(PDOException $exp){
            echo ("Eror de conexion con BD $dbname, error $exp");
        }
        return $con;
    }
}

?>