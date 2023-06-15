<?php

namespace Class;

use Class\BasicPDF;

class PDFDownloaderService
{
    public function downloaderPDF(PDFDownloader $basicPDF)
    {
        return $basicPDF->downloadPDF();
    }
}
