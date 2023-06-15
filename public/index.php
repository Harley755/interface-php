<?php

use Class\BasicPDF;
use Class\PremiumPDF;
use Class\PDFDownloaderService;

require "../vendor/autoload.php";


// $basicPdf = new BasicPDF;
// var_dump($basicPdf->downloadPDF(50));

// $PDFDownloadService = new PDFDownloaderService;
// var_dump($PDFDownloadService->downloaderPDF(new BasicPDF));

$PDFDownloadService = new PDFDownloaderService;
var_dump($PDFDownloadService->downloaderPDF(new PremiumPDF()));
