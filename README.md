una simple capa de abstracción para el html2pdf
se espera que en un futuro se mejoren las funciones que esta libreria ofrece

    <?php
    require_once('vendor/autoload.php');

    use MakechTec\PDFBuilder\PDFBuilder;

    PDFBuilder::default()
        ->generate('some content inside the pdf file', __DIR__ . '/example.pdf');