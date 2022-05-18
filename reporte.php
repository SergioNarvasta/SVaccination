<?php 

$fila=file("registro.xls");

for($i=0; $i<count($fila); $i++){

list($dni,$pat,$mat,$nom,$gen,$ed,$fen,$cel,$dir,$dos,$fed,$cenv,$fac) = explode("\t",$fila[$i]);
}

$paciente=$pat." ".$mat." ".$nom;
$hombres=3;
$mujeres=0;
$mayores=1;
$menores=0;
$riesgo=0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">   
    <title>REPORTE</title>
    <link rel=StyleSheet href="estilos.css" type="text/css">
</head>
<body class="reporte">
    <br><br>
    <h2 align="center" >PADRON OFICIAL</h2>
    <br>
    <a class="btnIniciorep" href="index.php" target="_parent">Inicio</a>
    <br><br>
    <table class="tablerep">
     <tr>
         <td>DNI</td>
         <td>NOMBRES</td>
         <td>GENERO</td>
         <td>EDAD</td>
         <td>FECHA NAC</td>
         <td>CELULAR</td>
         <td>DIRECCION</td>
         <td>DOSIS</td>
         <td>FECHA DOSIS</td>
         <td>CENTRO VAC</td>
         <td>FACTORES</td>
     </tr>
     <tr>
         <td><?php echo $dni?></td>
         <td><?php echo $paciente?></td>
         <td><?php echo $gen?></td>
         <td><?php echo $ed?></td>
         <td><?php echo $fen?></td>
         <td><?php echo $cel?></td>
         <td><?php echo $dir?></td>
         <td><?php echo $dos?></td>
         <td><?php echo $fed?></td>
         <td><?php echo $cenv?></td>
         <td><?php echo $fac?></td>
        
     </tr>
     <tr>
        <td><?php echo $dni?></td>
         <td><?php echo $paciente?></td>
         <td><?php echo $gen?></td>
         <td><?php echo $ed?></td>
         <td><?php echo $fen?></td>
         <td><?php echo $cel?></td>
         <td><?php echo $dir?></td>
         <td><?php echo $dos?></td>
         <td><?php echo $fed?></td>
         <td><?php echo $cenv?></td>
         <td><?php echo $fac?></td>
     </tr>
     <tr>
         <td><?php echo $dni?></td>
         <td><?php echo $paciente?></td>
         <td><?php echo $gen?></td>
         <td><?php echo $ed?></td>
         <td><?php echo $fen?></td>
         <td><?php echo $cel?></td>
         <td><?php echo $dir?></td>
         <td><?php echo $dos?></td>
         <td><?php echo $fed?></td>
         <td><?php echo $cenv?></td>
         <td><?php echo $fac?></td>
     </tr>
     <tr>
     <tr>
         <td><?php echo $dni?></td>
         <td><?php echo $paciente?></td>
         <td><?php echo $gen?></td>
         <td><?php echo $ed?></td>
         <td><?php echo $fen?></td>
         <td><?php echo $cel?></td>
         <td><?php echo $dir?></td>
         <td><?php echo $dos?></td>
         <td><?php echo $fed?></td>
         <td><?php echo $cenv?></td>
         <td><?php echo $fac?></td>
     </tr>
     <tr>
     <tr>
        <td><?php echo $dni?></td>
         <td><?php echo $paciente?></td>
         <td><?php echo $gen?></td>
         <td><?php echo $ed?></td>
         <td><?php echo $fen?></td>
         <td><?php echo $cel?></td>
         <td><?php echo $dir?></td>
         <td><?php echo $dos?></td>
         <td><?php echo $fed?></td>
         <td><?php echo $cenv?></td>
         <td><?php echo $fac?></td>
     </tr>
     <tr>
     <tr>
         <td><?php echo $dni?></td>
         <td><?php echo $paciente?></td>
         <td><?php echo $gen?></td>
         <td><?php echo $ed?></td>
         <td><?php echo $fen?></td>
         <td><?php echo $cel?></td>
         <td><?php echo $dir?></td>
         <td><?php echo $dos?></td>
         <td><?php echo $fed?></td>
         <td><?php echo $cenv?></td>
         <td><?php echo $fac?></td>
        
     </tr>


    </table>
    <br><br>
    <fieldset class="estadisticas">
        <legend>ESTADISTICAS</legend>
   <table align="center" >
       <tr>
           <td>Hombres</td>
           <td><?php echo $hombres?></td>
       </tr>
       <tr>
           <td>Mujeres</td>
           <td><?php echo $mujeres?></td>
       </tr>
       <tr>
           <td>Mayores</td>
           <td><?php echo $mayores?></td>
       </tr>
       <tr>
           <td>Menores</td>
           <td><?php echo $menores?></td>
       </tr>
       <tr>
           <td>F de Riesgo</td>
           <td><?php echo $riesgo?></td>
       </tr>
   </table >
   </fieldset>
</body>
</html>
