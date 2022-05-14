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
$archivo=fopen("registro.xls","a+");
$informacion=$dni."\t".$paterno."\t".$materno."\t".$nombres."\t".$genero."\t".$edad."\t".$fechan."\t".$celular."\t".$direccion."\t".$dosis."\t".$fechad."\t".$centrov."\t".$factores."\n";
fwrite($archivo,$informacion);
fclose($archivo);

?>
    <body>
    <br>
    <h2 align="center">Informacion registrada con exito</h2>
     <br>
     <a class="btnreporte" href="reporte.php" target="_parent">Consultar Reporte</a>
    </body>


