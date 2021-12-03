<?php
require_once 'test.php';
require 'vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();
$html2pdf->writeHTML('<h1 style="color:pink;">CodeWall PDF</h1> <br/> <p>Convert this HTML to PDF please!</p>');
$html2pdf->writeHTML('<h1 style="color:pink;">Codasd asdasd asd l PDF</h1> <br/> <p>Convert this HTML to PDF please!</p>');
$html2pdf->output('myPdf.pdf');
