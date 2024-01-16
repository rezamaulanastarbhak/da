<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

require_once 'koneksi.php';
require_once 'ProductRepository.php';
require_once 'ProductRepositoryInterface.php';

require 'fpdf1/fpdf.php';

$products = $productRepository->joinAll();


//$products = $productRepository->joinAll();

class PDF extends FPDF
{
    function Header()
    {
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'Laporan Produk', 0, 1, 'C');
        $this->Ln(10);
    }

    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Halaman ' . $this->PageNo(), 0, 0, 'C');
    }
}

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 12);



// Tabel Produk
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(10, 10, 'No', 1, 0, 'C');
$pdf->Cell(40, 10, 'Nama Produk', 1, 0, 'C');
$pdf->Cell(60, 10, 'Deskripsi', 1, 0, 'C');
$pdf->Cell(20, 10, 'Harga', 1, 0, 'C');
$pdf->Cell(20, 10, 'Jenis', 1, 0, 'C');
$pdf->Cell(40, 10, 'image path', 1, 1, 'C');
$no = 1;

$pdf->SetFont('Arial','', 11);
foreach ($products as $row) {
    $pdf->Cell(10, 10, $no++, 1);
    $pdf->Cell(40, 10, $row['name'], 1);
    $pdf->Cell(60, 10, $row['description'], 1);
    $pdf->Cell(20, 10, $row['price'], 1);
    $pdf->Cell(20, 10, $row['jenis_kategori'], 1);
    $pdf->Cell(40, 10, $row['image_path'], 1);
    
    $pdf->Ln();
}

$pdf->Output();
?>
