<?php

require 'fpdf1/fpdf.php';

$pdf = new FPDF();

$pdf->AddPage('P','A4',0);
$pdf->SetFont('Times', '', 14);
$pdf->Cell(40,10,'HEllo guys',0,0,'');
$pdf->Output();

?>