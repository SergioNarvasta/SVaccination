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
    <link rel=StyleSheet href="styles.css" type="text/css">
    <title>Consulta Detallada</title>
</head>
<body>
<br><br><br>
<strong><p class="textCarnet">Consulta de Espedientes en Linea</p></strong><br>

<strong><p  class="textds">Informacion detallada del expediente</p></strong><br>

<form action=".php" method="post">
<table class="tblDetalle" align="center">
   <tr>
       <td>Nro Expediente</td>
       <td><?php echo $nrodoc?></td>
   </tr>
   <tr>
       <td>Tipo de Documento</td>
       <td><?php echo $tipodoc?></td>
   </tr>
   <tr>
       <td>Apellidos </td>
       <td><?php echo $apel?></td>
   </tr>
   <tr>
       <td>Nombres</td>
       <td><?php echo $nom?></td>
   </tr>
   <tr>
       <td>Correo</td>
       <td><?php echo $cel?></td>
   </tr>
   <tr>
       <td>Celular</td>
       <td><?php echo $cel?></td>
   </tr>
   <tr>
       <td>Titulo de Documento</td>
       <td><?php echo $tit ?></td>
   </tr>
   <tr>
       <td>Descripcion del tramite</td>
       <td><?php echo $desc?></td>
       
   </tr>
   <tr>
       <td>Area Destinada</td>
       <td><?php echo $area?></td>
   </tr>
   <tr>
       <td>Estado Actual</td>
       <td><?php echo $est?></td>
   </tr>

</table>

</form>

</body>
</html>