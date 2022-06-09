<html>
    <head>
        <meta charset="utf-8">
        <link rel=StyleSheet href="estilos.css" type="text/css">
        <title>Registro de Tramites</title>
    </head>  
<?php
//captura de datos

$codigo = 234546;
for ($i=0; $i < 999999; $i++) { 
    $password= $codigo+1;
    return $password;
}

$tipodoc=$_POST["lstTipoDoc"];
$nroDoc=$_POST["txtNroDoc"];
$apellidos=$_POST["txtapellidos"];
$nombres=$_POST["txtnombres"];
$correo=$_POST["txtcorreo"];
$celular=$_POST["txtcelular"];
$titulo=$_POST["txtTitulo"];
$area=$_POST["lstArea"];
$descripcion=$_POST["txtdesc"];
$estado="Ingresado";

$paterno=trim(ucwords(strtolower($apellidos)));
$nombres=trim(ucwords(strtolower($nombres)));

$archivo=fopen("registro.xls","a+");
$informacion=$tipodoc."\t".$nroDoc."\t".$apellidos."\t".$nombres."\t".$correo."\t".$celular."\t".$titulo."\t".$area."\t".$descripcion."\t".$password."\t".$estado."\n";
fwrite($archivo,$informacion);
fclose($archivo);

//include("conexion.php")

?>

<body>
    <br>
    <h2 align="center">Tramite registrado con exito</h2>
    <p>Estimado <?php $apellidos+' '+ $nombres ?> guarde la siguiente informacion para consultar el estado de su tramite </p>
    <table>
    <tr>
                <td>Nro de Tramite</td>
                <td>Titulo de Tramite</td>
                <td>Area Destinada</td>
                <td>Password</td>
            </tr>
            <tr>
                <td><?php $nroDoc?></td>
                <td><?php $titulo?>  </td>
                <td><?php $area?> </td>
                <td><?php $password ?> </td>
            </tr>
    </table>
     <br>
     <a class="btnreporte" href="reporte.php" target="_parent">Consultar Reporte</a>
    </body>

