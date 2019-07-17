<?php
require "Fpdf/fpdf.php";




class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(30,10,'hola',0,0,'C');
        // Salto de línea
        $this->Ln(20);
    }


function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

require 'conexion.php';

$id = $_REQUEST['id'];

$val = $conec ->query(" SELECT * FROM inventario_pc WHERE id='$id'");

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'sahgcuysavcvs');

while($row = $val -> fetch_assoc()){
    $pdf -> Cell(90 , 10 , $row['id'], 1 , 2 , 'C' , 0);
    $pdf -> Cell(90 , 10 , $row['funcionario'], 1 , 0 , 'C' , 0);
    $pdf -> Cell(90 , 10 , $row['id'], 1 , 0 , 'C' , 0);
    $pdf -> Cell(90 , 10 , $row['id'], 1 , 0 , 'C' , 0);
    $pdf -> Cell(90 , 10 , $row['id'], 1 , 0 , 'C' , 0);
    $pdf -> Cell(90 , 10 , $row['id'], 1 , 0 , 'C' , 0);
    $pdf -> Cell(90 , 10 , $row['id'], 1 , 0 , 'C' , 0);
    $pdf -> Cell(90 , 10 , $row['id'], 1 , 0 , 'C' , 0);
    $pdf -> Cell(90 , 10 , $row['id'], 1 , 0 , 'C' , 0);
    $pdf -> Cell(90 , 10 , $row['id'], 1 , 0 , 'C' , 0);
    $pdf -> Cell(90 , 10 , $row['id'], 1 , 0 , 'C' , 0);
    $pdf -> Cell(90 , 10 , $row['id'], 1 , 0 , 'C' , 0);
    $pdf -> Cell(90 , 10 , $row['id'], 1 , 0 , 'C' , 0);
}
   
$pdf -> Output();



    

?>