<?php
$con = mysqli_connect('localhost','root','#Qwerty3','lastone');

$sql = "SELECT * FROM viaturab";
$sql2 = "SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='okay' AND `TABLE_NAME`='viaturab'";
$sql3 = "SELECT emailc FROM viaturab";

$result = mysqli_query($con,$sql);
$header = mysqli_query($con,$sql2);

require('../fpdf/fpdf.php');


$pdf = new FPDF();
$pdf->AddPage('L');
$pdf->SetFont('Arial','B',10);

foreach($header as $heading) {

  foreach($heading as $column_heading)

    $pdf->Cell(10,12,$column_heading,1);
}

foreach($result as $row) {

  $pdf->Ln();

  foreach($row as $column)

    $pdf->Cell(10,12,$column,1);
}

$pdf->Output("D", "boletim.pdf");
?>
