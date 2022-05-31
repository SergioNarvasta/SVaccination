<?php
include('class.ezpdf.php');
include('class.backgroundpdf.php');


 
 
$pdf = new backgroundPDF('a4', 'landscape', 'image', array('img' => 'img.jpg','width'=>842,'height'=>595,'xpos'=>0,'ypos'=>0));  
$pdf->selectFont('Helvetica.afm'); 




$pdf->ezText(' ', 180); 
$pdf->ezText('hola',20);
$pdf->ezNewPage(); 


 
$pdf->ezStream();
?>