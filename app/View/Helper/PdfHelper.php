<?php
App::import('Vendor', 'tcpdf/tcpdf');
//debug(App::import('Vendor', 'tcpdf/tcpdf'));
class PdfHelper  extends AppHelper                                  //2
{

    public $core;
 
    function PdfHelper() {
		# creamos un array con las dimensiones (ancho y alto);
		$dimensiones=array (210,297);    	
        $this->core = new TCPDF('P','mm',$dimensiones); //3
    }
}
