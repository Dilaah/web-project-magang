<?php

$servername    = "localhost";
$username    = "root";
$password    = "";
$dbname        = "rumah_kemasan";

$conn    = mysqli_connect ($servername, $username, $password, $dbname);
if (!$conn){
    die ("Connection Failed: ". mysqli_connect_error());
    }

// Koneksi library FPDF
require('fpdf.php');
// Setting halaman PDF
$pdf = new FPDF('l','mm','A4');
// Menambah halaman baru
$pdf->AddPage();

$pdf->SetFont('Arial','B',16);
$pdf->Cell(300,7,'Daftar Kunjungan Rumah Kemasan Sumsel',0,1,'C');

$pdf->Cell(10,10,'',0,1);
// Setting jenis font
$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,6,'NO',1,0);
$pdf->Cell(50,6,'NAMA PEMILIK',1,0);
$pdf->Cell(50,6,'NAMA MEREK',1,0);
$pdf->Cell(45,6,'JENIS PRODUK',1,0);
$pdf->Cell(35,6,'TELEPON',1,0);
$pdf->Cell(35,6,'TANGGAL',1,0);
$pdf->Cell(50,6,'KEPERLUAN',1,1);

$pdf->SetFont('Arial','',10);
$query = mysqli_query($conn, "SELECT * FROM data_kunjungan");
$no=1;
while ($row = mysqli_fetch_array($query)){
    $pdf->Cell(10,6,$no++,1,0);
    $pdf->Cell(50,6,$row['nama_pemilik'],1,0);
    $pdf->Cell(50,6,$row['nama_merek'],1,0);
    $pdf->Cell(45,6,$row['jenis_produk'],1,0);
    $pdf->Cell(35,6,$row['telepon'],1,0);
    $pdf->Cell(35,6,$row['tanggal'],1,0);
    $pdf->Cell(50,6,$row['keperluan'],1,1);
}

$pdf->Output();
?>