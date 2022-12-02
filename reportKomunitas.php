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
$pdf->Cell(300,7,'Daftar Komunitas IKM',0,1,'C');

$pdf->Cell(10,10,'',0,1);
// Setting jenis font
$pdf->SetFont('Arial','B',11);
$pdf->Cell(10,7,'NO',1,0);
$pdf->Cell(62,7,'Nama Komunitas',1,0);
$pdf->Cell(42,7,'Jenis Komunitas',1,0);
$pdf->Cell(111,7,'Alamat Komunitas',1,0);
$pdf->Cell(35,7,'Telepon',1,0);
$pdf->Cell(20,7,'Status',1,1);

$pdf->SetFont('Arial','',9);
$query = mysqli_query($conn, "SELECT * FROM komunitas_ikm");
$no=1;
while ($row = mysqli_fetch_array($query)){
    $pdf->Cell(10,10,$no++,1,0);
    $pdf->Cell(62,10,$row['nama_komunitas'],1,0);
    $pdf->Cell(42,10,$row['jenis_komunitas'],1,0);
    $pdf->Cell(111,10,$row['alamat'],1,0);
    $pdf->Cell(35,10,$row['telepon'],1,0);
    $pdf->Cell(20,10,$row['status'],1,1);
}

$pdf->Output();
?>