<?php

include('class.ezpdf.php');
include('class.backgroundpdf.php');
include('conexion.php');

$codigo = isset($_GET["codigo"]) ? $_GET["codigo"] : FALSE;
$escuela = isset($_GET["escuela"]) ? $_GET["escuela"] : FALSE;
$tipoparticipante = isset($_GET["tipoparticipante"]) ? $_GET["tipoparticipante"] : FALSE;

if ($codigo) {
        
  $query = "select a.*, e.*, p.*
                    from alumno as a inner join escuela as e
                    on a.idescuela = e.idescuela 
                    inner join participante as p
                    on a.idtipoparticipante = p.idtipoparticipante
            where a.idalumno = $codigo";
} else if ($escuela) {
  $query = "select a.*, e.*, p.*
                    from alumno as a inner join escuela as e
                    on a.idescuela = e.idescuela 
                    inner join participante as p
                    on a.idtipoparticipante = p.idtipoparticipante
            where a.idescuela = $escuela";
} else if ($tipoparticipante) {
        
  $query = "select a.*, e.*, p.*
                    from alumno as a inner join escuela as e
                    on a.idescuela = e.idescuela 
                    inner join participante as p
                    on a.idtipoparticipante = p.idtipoparticipante
            where a.idtipoparticipante = $tipoparticipante";
}

$pdf = new backgroundPDF('a4', 'landscape', 'image', array('img' => 'img.jpg','width'=>842,'height'=>595,'xpos'=>0,'ypos'=>0));  
$pdf->selectFont('Helvetica.afm'); 

$fila = mysql_query($query, $cn);

while ($r = mysql_fetch_array($fila)) {
        $info = $r["paterno"]." ".$r["materno"].", ".$r["nombre"];
        
        $pdf->ezText(' ', 200);
        $pdf->ezText($info,20,array('justification'=>'center'));
        $pdf->ezText(' ', 47); 
        $pdf->ezText('                                                                       '.$r["tipoparticipante"],15 ); 
        $pdf->ezNewPage();
}

$pdf->ezStream();

?>