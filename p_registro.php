<html>
    <head>
        <meta charset="utf-8">
        <link rel=StyleSheet href="estilos.css" type="text/css">
        <title>Registro de Pacientes</title>
    </head>  
<?php

//captura de datos

$dni=$_POST["txtdni"];
$paterno=$_POST["txtpaterno"];
$materno=$_POST["txtmaterno"];
$nombres=$_POST["txtnombres"];
$genero=$_POST["rbtgenero"];
$edad=$_POST["txtedad"];
$fechan=$_POST["fechanac"];
$celular=$_POST["txtcelular"];
$direccion=$_POST["txtdireccion"];

$dosis=$_POST["txtdosis"];
$fechad=$_POST["fechadosis"];
$centrov=$_POST["lstcentrov"];
$factores=$_POST["lstfactores"];

$paterno=trim(ucwords(strtolower($paterno)));
$materno=trim(ucwords(strtolower($materno)));
$nombres=trim(ucwords(strtolower($nombres)));

//preparar archivo 
//$archivo=fopen("registro.xls","a+");
//$informacion=$dni."\t".$paterno."\t".$materno."\t".$nombres."\t".$genero."\t".$edad."\t".$fechan."\t".$celular."\t".$direccion."\t".$dosis."\t".$fechad."\t".$centrov."\t".$factores."\n";
//fwrite($archivo,$informacion);
//fclose($archivo);


$server = "DESKTOP-2NA2N4M\SQLEXPRESS";
$database = "BDSystemV";
$username = "Sergio";
$password = "1234"; 

  $conexion = new PDO("sqlsrv:server=$server;database=$database,$username,$password");
 
  $consulta = $conexion-> prepare("INSERT INTO Paciente
  ([Dni],[A Paterno],[A Materno],[Nombres],[Genero],[Edad],[Fecha Nac],[Celular],[Direccion],[Dosis],[Fecha Dosis],[Centro Vac],[Factores])
  VALUES($dni,$paterno,$materno,$nombres,$genero,$edad,$fechan,$celular,$direccion,$dosis,$fechad,$centrov,$factores)");
  
  $consulta-> execute();
?>
    <body>
    <br>
    <h2 align="center">Informacion registrada con exito</h2>
     <br>
     <a class="btnreporte" href="reporte.php" target="_parent">Consultar Reporte</a>
    </body>


