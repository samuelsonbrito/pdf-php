<?php

include './fpdf181/fpdf.php';

$pdf = new FPDF();

//Adiciona uma página nova ao documento.
$pdf->AddPage();

//Define a fonte arial, negrito tamanho 12.
$pdf->SetFont('Arial', 'B', 12);

//Escreve na tela o texto, o número antes do texto indica a altura do mesmo.
$pdf->Write(1, 'Alô Mundo!!');

//Mostra o documento pdf na tela do navegador.
$pdf->Output();
