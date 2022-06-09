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
<strong><p class="textCarnet">Consulta de Espedientes en Linea</p></strong><br>
<table class="tblconsulta" align="center">
    <tr> 
        <td>CONTROLES DE OPERACIONES</td>
        <td><a class="btnreporte" href="detconsulta.php" target="_parent">Ver Detalle de Expediente</a></td>
        <td><a class="btnreporte" href="futvirtual.php" target="_parent">Salir del Sistema</a></td>
    </tr>
</table>
<strong><p  class="textds">Informacion del expediente</p></strong><br>

<form action=".php" method="post">
<table class="tblconsulta" align="center">
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

</table>

</form>

</body>
</html>