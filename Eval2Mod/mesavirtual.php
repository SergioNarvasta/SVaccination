<?php 
$fila=file("registro.xls");

for($i=0; $i<count($fila); $i++){

list($tipodoc,$nrodoc,$apel,$nom,$correo,$cel,$tit,$area,$desc,$psd,$est) = explode("\t",$fila[$i]);
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel=StyleSheet href="estilos.css" type="text/css">
    <title>Consulta</title>
</head>
<body>
<br><br><br>
<strong><p align="center" class="textCarnet">Consulta de Tramite</p></strong>
<strong><p align="center" class="textds">Ingrese los Datos Solicitados</p></strong><br>

<table class="tblconsulta" align="center">
    <tr>
        <td>Numero de Documento</td>
    </tr>
    <tr>
        <td><input class="input"  type="text" value=""> </td>
    </tr>
    <tr>
        <td>Password</td>
    </tr>
    <tr>
        <td><input class="input"  type="text" value=""></td>
    </tr>
    <tr> 
        <td><a class="btnConsulta"  href="consulta.php"target="_parent"> CONSULTAR</a></td>
    </tr>
</table>
</body>
</html>