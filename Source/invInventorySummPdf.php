<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (TRUE)
{
    $totalNoOfBooks = $_GET['totBooks'];
    $totalNoOfDamages = $_GET['totRefs'];
    
    require './lib/fpdf181/fpdf.php';
    
    $genPdf = new FPDF('P','mm','A4');
    $genPdf->AddPage();
    $genPdf->SetFont('Arial','B',16);
    $genPdf->Cell(0, 10, 'Kotahena Central College',1,1,'C');
    $genPdf->SetFont('Arial','B',14);
    $genPdf->Cell(0, 10, 'Inventory Summary',1,1,'C');
    $genPdf->SetFont('Arial','B',12);
    $genPdf->Cell(0, 10, 'As at '.date("Y-m-d"),1,1,'C');
    //$genPdf->Line(5, 5, 10, 10);
    $genPdf->Output();
}