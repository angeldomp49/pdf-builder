<?php
namespace MakechTec\PDFBuilder;

use Spipu\Html2Pdf\Html2Pdf;

class ContratoBuilder extends Html2Pdf{

    public static function default(){
        return new self( 'P','A4','es','true','UTF-8' );
    }

    public function generate( $html, $path){
        $this->content($html);
        $this->store($path);
    }

    protected function content($html){
        $this->writeHTML($html);
    }

    protected function store($path){
        $this->output($path, 'F');
    }
}