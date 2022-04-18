<?php

require('../assets/fpdf/fpdf.php');

$pdf=new FPDF();

$pdf->AddPage();

$pdf->AddFont('JosefinSans-SemiBold','','JosefinSans-SemiBold.php');
$pdf->AddFont('JosefinSans-Thin','','JosefinSans-Thin.php');
// $pdf->SetStyle(string '1', string 'JosefinSans-SemiBold', string 'U', int '13', string 'red');
$pdf->Image('../images/virtuoz.png',10, 10, 100, 15);
$pdf->Image('../images/notes.png',50, 120, 100, 90);

$pdf->SetFont('JosefinSans-SemiBold','U',20);
$pdf->Text(60,50,'Bilan de votre inscription');

// ADHERENT INFOS
$pdf->SetFont('JosefinSans-SemiBold','',16);
$pdf->Text(130,70,'Inscrit :');

$pdf->SetFont('JosefinSans-Thin','',13);
$pdf->Text(130,80,'NOM');
$pdf->SetFont('JosefinSans-Thin','',13);
$pdf->Text(130,87,'PRENOM');

// COURS INFOS
$pdf->SetFont('JosefinSans-SemiBold','',16);
$pdf->Text(10,70,'Votre inscription au cours suivant :');

    // HORAIRE
    $pdf->SetFont('JosefinSans-Thin','U',13);
    $pdf->Text(10,80,'Horaire :');
    $pdf->SetFont('JosefinSans-Thin','',13);
    $pdf->Text(40,80,'Lundi 17h');
    // PROF
    $pdf->SetFont('JosefinSans-Thin','U',13);
    $pdf->Text(10,90,'Professeur :');
    $pdf->SetFont('JosefinSans-Thin','',13);
    $pdf->Text(40,90,'Mario KART');
    // INSTRUMENT
    $pdf->SetFont('JosefinSans-Thin','U',13);
    $pdf->Text(10,100,'Instrument :');
    $pdf->SetFont('JosefinSans-Thin','',13);
    $pdf->Text(40,100,'Guitare');
    // REFERENCE
    $pdf->SetFont('JosefinSans-Thin','U',13);
    $pdf->Text(10,110,'Reference :');
    $pdf->SetFont('JosefinSans-Thin','',13);
    $pdf->Text(40,110,'4');

//CONSERVATOIRE
$pdf->SetFont('JosefinSans-SemiBold','',16);
$pdf->Text(10,220,'Conservatoire :');
$pdf->SetFont('JosefinSans-Thin','',13);
$pdf->Text(10,230,'Conservatoire du 7e Erik Satie');
$pdf->Text(10,237,"135 Bis rue de l'Universite");
$pdf->Text(10,244,'75007 PARIS');

// CONTACT
$pdf->SetFont('JosefinSans-SemiBold','',16);
$pdf->Text(130,220,'Contact :');

$pdf->SetFont('JosefinSans-Thin','',13);
$pdf->Text(130,230,'06 74 24 54 29');
$pdf->Text(130,237,"virtuozContact@academy.fr");


$pdf->SetFont('JosefinSans-Thin','',13);
$pdf->Text(130, 290, chr(169) . ' V I R T U O Z. Tous droits reserves', 0, 1, 'C', 0);

$pdf->SetFont('JosefinSans-SemiBold','',20);
$pdf->SetTextColor(113 , 203, 202);
$pdf->Text(80,130,'Bon cours !');



// Enfin, le document est terminé et envoyé au navigateur grâce à Output().
$pdf->Output();
?>