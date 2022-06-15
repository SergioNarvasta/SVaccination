<?php 
$ubic="Mesa de Partes";
$fila=file("registro.xls");

for($i=0; $i<count($fila); $i++){

list($tipodoc,$nrodoc,$apel,$nom,$correo,$cel,$tit,$area,$desc,$psd,$est) = explode("\t",$fila[$i]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel=StyleSheet href="styles.css" type="text/css">
    <title>Consulta</title> 
</head>
<body>
<br><br><br>
<strong><h1 >Consulta de Espedientes en Linea</h1></strong><br>
<table class="tblConsulta" align="center">
    <tr> 
        <td>CONTROLES DE OPERACIONES</td>
        <td><a class="btnConsulta" href="detconsulta.php" target="_parent">Ver Detalle de Expediente</a></td>
        <td><a class="btnConsulta" href="futvirtual.php" target="_parent">Salir del Sistema</a></td>
    </tr>
</table>
<strong><p  class="textds">Informacion del expediente</p></strong><br>

<table class="tblConsulta" align="center">
    <tr>
        <td>Numero de Expediente</td>
        <td>Nombre del Administrado</td>
       
    </tr>
    <tr>
    <td><?php echo $nrodoc?></td>
        <td><?php echo $nom?></td>
    </tr>
    <tr>
        <td>Documento</td>
        <td>Asunto</td>
    </tr>
    <tr>
        <td><?php echo $tipodoc?></td>
        <td><?php echo $desc?></td>
    </tr>
    </tr>
    </table>
    <br>
    <p style="color:red;"> LA SITUACION ACTUAL DE SU EXPEDIENTE CONSULTADO ES :</p>
   <table>
    <tr>
        <td>Estado Actual</td>
        <td>             </td>
        <td>Ubicacion Actual</td>
    </tr>
    <tr>
        <td><?php echo $est?></td>
        <td>                </td>
        <td><?php echo $ubic?></td>
    </tr>

</table>



</body>
</html>