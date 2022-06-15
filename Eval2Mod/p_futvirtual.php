<html>
    <head>
        <meta charset="utf-8">
        <link rel=StyleSheet href="styles.css" type="text/css">
        <title>Registro de Tramites</title>
    </head>  
<?php

//captura de datos
$codigo = 234546;
$password= $codigo+1;
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
    <p>Estimado <?php echo $apellidos.' '.$nombres ?> guarde la siguiente informacion para consultar el estado de su tramite </p>
    <table class="tblInfo" align="center"> 
<tr>
    <td>Nro de Tramite</td>
    <td><?php echo $nroDoc ?></td>
</tr>
<tr>
    <td>Titulo de Tramite</td>
    <td><?php echo $titulo?></td>
</tr>
<tr>
    <td>Area Destinada</td>
    <td><?php echo $area?></td>
</tr>
<tr>
    <td>Password</td>
    <td><?php echo $password ?></td>
</tr>   
    </table>
     <br>
     <a class="btnConsulta" href="futvirtual.php" target="_parent">VOLVER</a>
    </body>

<?php 

?>