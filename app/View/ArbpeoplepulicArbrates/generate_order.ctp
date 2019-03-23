<?php
/*variable para los imagenes inicializados con su respectivo
**Codigo de usuario*/
//Ruta de acceso para imagesn;
$W_PATH_IMAGES_USERS = K_PATH_IMAGES.'/users/';
$W_PATH_IMAGES_LOGO = 'logo/';
$W_EXTENSION = 'png';
//ejemplo
$W_NAME_FILE = '3'.'.'.$W_EXTENSION;


$INPDP = 'INPDP'.'.'.$W_EXTENSION;
$INPAP = 'INPAP'.'.'.$W_EXTENSION;

$meses  = array(
    'January' => 'Enero',
    'February' => 'Febrero',
    'March' => 'Marzo',
    'April' => 'Abril',
    'May' => 'Mayo',
    'June' => 'Junio',
    'July' => 'Julio',
    'August' => 'Agosto',
    'September' => 'Septiembre',
    'October' => 'Octubre',
    'November' => 'Noviembre',
    'December' => 'Diciembre'
    );
$fecha = 'HUANUCO,'.strftime("%d").' de '.$meses[strftime("%B")].' del '. strftime("%Y");

$hoy = date("j/n/ Y");
// set document information
$this->Pdf->core->SetCreator('clase TCPDF');
$this->Pdf->core->SetAuthor('WILINTON YUNIOR ABAD RAMOS');
$g= $this->Pdf->core->SetTitle('FORMATO 02 '.$hoy);
$this->Pdf->core->SetSubject('');
$this->Pdf->core->SetKeywords('');
// set default header data


/* Establecemos los colores de lineas, textos, anchos de lineas y tipografias */
$this->Pdf->core->setDrawColor(86,86,86);
$this->Pdf->core->setFillColor(225,225,225);
$this->Pdf->core->setLineWidth(0.2);
$this->Pdf->core->setFont('Helvetica','',8);
$this->Pdf->core->setTextColor(20,33,53);
/* Ponemos los márgenes*/
$this->Pdf->core->SetMargins(15,20,15,true);
$this->Pdf->core-> setPageOrientation ('l');

# Cabecera
$CONTLOGO  = 'CONTLOGO'.'.'.$W_EXTENSION;
$INPELOGO  = 'INPELOGO'.'.'.$W_EXTENSION;

$CONTLOGOTITLE  = 'BENEFICIARIO: ';
$CONTLOGOSUBTITLE  = 'N° D.N.I: ';
$INPELOGOTITLE  = 'SISTEMA ARBITRIOS PUBLCICOS';
$INPELOGOSUBTITLE  = 'MUNICIPALIDAD DE PAMPAMARCA';

$this->Pdf->core->SetHeaderData($W_PATH_IMAGES_LOGO.$INPELOGO, PDF_HEADER_LOGO_WIDTH, $INPELOGOTITLE, $INPELOGOSUBTITLE, array(20,33,53),array(33,53,86));
/* desactivamos encabezados por defecto */
$this->Pdf->core->setPrintHeader(true);

# Cuerpo
/* Margenes entre celdas utilizando SetCellMargins */
$this->Pdf->core->setCellMargins(0,0,0,0);
/*Margenes entre bordes de celdas y textos utilizando SetCellPaddings */
$this->Pdf->core->setCellPaddings(0,0,0,0);

# Pie de Página
/* desactivamos pies de página por defecto */
$this->Pdf->core->setPrintFooter(false);

if ($mgs=='') {

$INPDP_EXIST = 0;
$INPAP_EXIST = 0;

foreach ($costs as $key => $value) {
    if ($value['CostJoin']['INPDP'] == 1 ) {
        $INPDP_EXIST = $value['CostJoin']['INPDP'];
    }
    if ($value['CostJoin']['INPAP'] == 1) {
            $INPAP_EXIST = $value['CostJoin']['INPAP'];
        }
}

// debug($periods);
// debug($acts);
// debug($costs);
// debug($attentions);


# General Documento
/* Contenido del documento*/
$ANCHO = 250;
$ALTO = 170;
$MCMCOLUMNA = 6; #6 2
$CONSTANTECOLUMNA = (int)$ANCHO/$MCMCOLUMNA;
//$MCMFILA = 4; #4 2
$COLUMNAS = 6; //
$FILAS = count($acts);
/*Titulo de la hoja, periodo y nombre del archivo*/
$titulo = 'COSTO DEL CONSUMO DE ENERGIA ELECTRICA Y AGUA EN LA PREPARACIÓN DE ALIMENTOS';
$periodo = $periods[0]['Period']['start'].' A '.$periods[0]['Period']['end'];
/* Variables para calulo de espacio y tamaño de letra*/
$cabecera = 4;
$cabecera_datos = 3;
$cuerpo = 3;
$cuerpo_datos = 2;
$pie = 1;
$pie_datos = 1;
$firma = 1;
$firma_datos = 4;

$registros = $FILAS;

$espacio_total = $cabecera + $pie + $firma + $cuerpo;
$datos_total = $cabecera_datos + $cuerpo_datos + $pie_datos +  $firma_datos + $registros;
$altura_celda = (int)floor(($ALTO - $espacio_total)/($datos_total));
$tamaño_letra = (int)floor(($altura_celda/(0.35))/3);


# Variables
 /* Asignamos a  la variable filename (nombre del archivo) */

$nombre_archivo = 'COSTO DEL CONSUMO DE ENERGIA ELECTRICA Y AGUA EN LA PREPARACIÓN DE ALIMENTOS'.' ( '.$periodo.' ).pdf';
# Página
# Código
/*añadimos una página en formato A4 (formato por defecto) */
$this->Pdf->core->Addpage();
$this->Pdf->core->Ln(1); # Inicio
$this->Pdf->core->setFont('Helvetica','B',$tamaño_letra);
$this->Pdf->core->MultiCell(($MCMCOLUMNA)*($CONSTANTECOLUMNA), $altura_celda,$titulo, 0, 'C', 0, 0, '', '', true, 0, false, true, $altura_celda, 'M');
$this->Pdf->core->Ln($altura_celda); # Titulo
$this->Pdf->core->MultiCell(($MCMCOLUMNA/2)*($CONSTANTECOLUMNA), $altura_celda, 'ESTABLECIMIENTO PENITENCIARIO DE', 0, 'L', 0, 0, '', '', true, 0, false, true, $altura_celda, 'M');
$this->Pdf->core->setFont('Helvetica','',$tamaño_letra);
$this->Pdf->core->MultiCell(($MCMCOLUMNA/2)*($CONSTANTECOLUMNA), $altura_celda, ' : '.'HUANUCO', 0, 'L', 0, 0, '', '', true, 0, false, true, $altura_celda, 'M');
$this->Pdf->core->Ln($altura_celda); #1
$this->Pdf->core->setFont('Helvetica','B',$tamaño_letra);
$this->Pdf->core->MultiCell(($MCMCOLUMNA/2)*($CONSTANTECOLUMNA), $altura_celda, 'PERIODO DE ATENCIÓN', 0, 'L', 0, 0, '', '', true, 0, false, true, $altura_celda, 'M');
$this->Pdf->core->setFont('Helvetica','',$tamaño_letra);
$this->Pdf->core->MultiCell(($MCMCOLUMNA/2)*($CONSTANTECOLUMNA), $altura_celda, ' : '.$periodo, 0, 'L', 0, 0, '', '', true, 0, false, true, $altura_celda, 'M');
$this->Pdf->core->Ln($altura_celda+1); # Subtitulo

#............................Cuerpo............
#::::::::::::::::::::::1:::::::::::::::::::::::
$this->Pdf->core->setFont('Helvetica','B',$tamaño_letra);
$this->Pdf->core->setEqualColumns(1, (2)*($CONSTANTECOLUMNA));
$this->Pdf->core->selectColumn(0); #1
$this->Pdf->core->MultiCell((2)*($CONSTANTECOLUMNA), $altura_celda, '', 0, 'C', 0, 0, '', '', true, 0, false, true, $altura_celda, 'M');
$this->Pdf->core->setEqualColumns(1, (1)*($CONSTANTECOLUMNA));
$this->Pdf->core->selectColumn(0); #1
$this->Pdf->core->MultiCell((1)*($CONSTANTECOLUMNA), $altura_celda, 'POBLACION', 1, 'C', 1, 0, '', '', true, 0, false, true, $altura_celda, 'M');
$this->Pdf->core->setEqualColumns(1, (1)*($CONSTANTECOLUMNA));
$this->Pdf->core->selectColumn(0); #1
$this->Pdf->core->MultiCell((1)*($CONSTANTECOLUMNA), $altura_celda, 'CANTIDAD DE RACIONES ATENDIDAS', 1, 'C', 1, 0, '', '', true, 0, false, true, $altura_celda, 'M');
$this->Pdf->core->setEqualColumns(1, (1)*($CONSTANTECOLUMNA));
$this->Pdf->core->selectColumn(0); #1
$this->Pdf->core->MultiCell((1)*($CONSTANTECOLUMNA), $altura_celda, 'FACTOR COSTO POR CADA RACION (*)', 1, 'C', 1, 0, '', '', true, 0, false, true, $altura_celda, 'M');
$this->Pdf->core->setEqualColumns(1, (1)*($CONSTANTECOLUMNA));
$this->Pdf->core->selectColumn(0); #1
$this->Pdf->core->MultiCell((1)*($CONSTANTECOLUMNA), $altura_celda, 'COSTO TOTAL S/.', 1, 'C', 1, 0, '', '', true, 0, false, true, $altura_celda, 'M');
$this->Pdf->core->Ln($altura_celda+1); # cabecera
#::::::::::::::::::::::2:::::::::::::::::::::::
//////////////descuento total
$descuento = 0;
            for ($i = 0; $i < $FILAS; $i++) {
                $p_a = $attentions[$i][0]['p_a_service'];
                $factor_costo = $costs[$i]['CostJoin']['f_c_c_r'];
                $costo_total = $p_a* $factor_costo;
                $descuento = $descuento + $costo_total;
                $this->Pdf->core->setEqualColumns(1, (2)*($CONSTANTECOLUMNA));
                $this->Pdf->core->selectColumn(0); #1
                $this->Pdf->core->MultiCell((2)*($CONSTANTECOLUMNA), $altura_celda, '', 0, 'C', 0, 0, '', '', true, 0, false, true, $altura_celda, 'M');
                for ($j = 0; $j < 4; $j++) {
                    if ($j == 0) {
                        $this->Pdf->core->setFont('Helvetica','',(int)floor($tamaño_letra/1.5));
                        $this->Pdf->core->setEqualColumns(1, (1)*($CONSTANTECOLUMNA));
                        $this->Pdf->core->selectColumn(0); #1
                        $this->Pdf->core->MultiCell((1)*($CONSTANTECOLUMNA), $altura_celda, $acts[$i]['Population']['name'], 1, 'C', 0, 0, '', '', true, 0, false, true, $altura_celda, 'M');
                    }
                    if ($j == 1) {
                        $this->Pdf->core->setFont('Helvetica','',$tamaño_letra);
                        $this->Pdf->core->setEqualColumns(1, (1)*($CONSTANTECOLUMNA));
                        $this->Pdf->core->selectColumn(0); #1
                        $this->Pdf->core->MultiCell((1)*($CONSTANTECOLUMNA), $altura_celda, $p_a, 1, 'C', 0, 0, '', '', true, 0, false, true, $altura_celda, 'M');
                    }
                    if ($j == 2) {
                        $this->Pdf->core->setFont('Helvetica','',$tamaño_letra);
                        $this->Pdf->core->setEqualColumns(1, (1)*($CONSTANTECOLUMNA));
                        $this->Pdf->core->selectColumn(0); #1
                        $this->Pdf->core->MultiCell((1)*($CONSTANTECOLUMNA), $altura_celda, $factor_costo, 1, 'C', 0, 0, '', '', true, 0, false, true, $altura_celda, 'M');
                    }
                    if ($j == 3) {
                        $this->Pdf->core->setFont('Helvetica','',$tamaño_letra);
                        $this->Pdf->core->setEqualColumns(1, (1)*($CONSTANTECOLUMNA));
                        $this->Pdf->core->selectColumn(0); #1
                        $this->Pdf->core->MultiCell((1)*($CONSTANTECOLUMNA), $altura_celda, $costo_total, 1, 'C', 0, 0, '', '', true, 0, false, true, $altura_celda, 'M');
                    }
                }
                $this->Pdf->core->Ln($altura_celda);
            }
#::::::::::::::::::::::3:::::::::::::::::::::::
$this->Pdf->core->setFont('Helvetica','B',$tamaño_letra);
$this->Pdf->core->Ln(1);
$this->Pdf->core->setEqualColumns(1, (2)*($CONSTANTECOLUMNA));
$this->Pdf->core->selectColumn(0); #1
$this->Pdf->core->MultiCell((2)*($CONSTANTECOLUMNA), $altura_celda, '', 0, 'C', 0, 0, '', '', true, 0, false, true, $altura_celda, 'M');
$this->Pdf->core->setEqualColumns(1, (3)*($CONSTANTECOLUMNA));
$this->Pdf->core->selectColumn(0); #1
$this->Pdf->core->MultiCell((3)*($CONSTANTECOLUMNA), $altura_celda, 'DESCUENTO TOTAL  S/.', 1, 'C', 1, 0, '', '', true, 0, false, true, $altura_celda, 'M');
$this->Pdf->core->setEqualColumns(1, (1)*($CONSTANTECOLUMNA));
$this->Pdf->core->selectColumn(0); #1
$this->Pdf->core->MultiCell((1)*($CONSTANTECOLUMNA), $altura_celda, $descuento, 1, 'C', 1, 0, '', '', true, 0, false, true, $altura_celda, 'M');
$this->Pdf->core->Ln($altura_celda+1); # total
#::::::::::::::::::::::4:::::::::::::::::::::::
$this->Pdf->core->setEqualColumns(1, (2)*($CONSTANTECOLUMNA));
$this->Pdf->core->selectColumn(0);
$this->Pdf->core->setFont('Helvetica','B',$tamaño_letra);
$this->Pdf->core->MultiCell((2)*($CONSTANTECOLUMNA), $altura_celda, 'Lugar y Fecha : ', 0, 'R', 0, 0, '', '', true, 0, false, true, $altura_celda, 'M');
$this->Pdf->core->setEqualColumns(1, (4)*($CONSTANTECOLUMNA));
$this->Pdf->core->selectColumn(0);
$this->Pdf->core->setFont('Helvetica','',$tamaño_letra);
$this->Pdf->core->MultiCell((3)*($CONSTANTECOLUMNA), $altura_celda, $fecha, 1, 'C', 0, 0, '', '', true, 0, false, true, $altura_celda, 'M');
$this->Pdf->core->Ln($altura_celda+1); # fecha
#............................Cuerpo............
#...................FIRMA..............
$this->Pdf->core->setEqualColumns(1, (2)*($CONSTANTECOLUMNA));
$this->Pdf->core->selectColumn(0);
if ($INPDP_EXIST == 1) {
$this->Pdf->core->Image( $imagen=$W_PATH_IMAGES_USERS.$INPDP, $x=$this->Pdf->core->GetX(), $y=$this->Pdf->core->GetY(), $ancho=(2)*($CONSTANTECOLUMNA), $alto=3*$altura_celda, $tipo=$W_EXTENSION, $enlace='', $punto_insercion='T', $remuestreo=true, $resolucion=((2)*($CONSTANTECOLUMNA))*(3*$altura_celda), $alineacion='L', $imk=false, $imgk=false, $borde=1, $proporcionalidad=false, $ocultar=false, $encajar=true);
} else {
$this->Pdf->core->MultiCell((2)*($CONSTANTECOLUMNA), 3*$altura_celda, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 3*$altura_celda, 'M');
}

$this->Pdf->core->setEqualColumns(1, (2)*($CONSTANTECOLUMNA));
$this->Pdf->core->selectColumn(0);
$this->Pdf->core->MultiCell((2)*($CONSTANTECOLUMNA), 3*$altura_celda, '', 0, 'C', 0, 0, '', '', true, 0, false, true, 3*$altura_celda, 'M');
$this->Pdf->core->setEqualColumns(1, (2)*($CONSTANTECOLUMNA));
$this->Pdf->core->selectColumn(0);
if ($INPAP_EXIST == 1) {
$this->Pdf->core->Image( $imagen=$W_PATH_IMAGES_USERS.$INPAP, $x=$this->Pdf->core->GetX(), $y=$this->Pdf->core->GetY(), $ancho=(2)*($CONSTANTECOLUMNA), $alto=3*$altura_celda, $tipo=$W_EXTENSION, $enlace='', $punto_insercion='T', $remuestreo=true, $resolucion=((2)*($CONSTANTECOLUMNA))*(3*$altura_celda), $alineacion='R', $imk=false, $imgk=false, $borde=1, $proporcionalidad=false, $ocultar=false, $encajar=true);
} else {
$this->Pdf->core->MultiCell((2)*($CONSTANTECOLUMNA), 3*$altura_celda, '', 1, 'C', 0, 0, '', '', true, 0, false, true, 3*$altura_celda, 'M');
}
#................Letras de la firma
$this->Pdf->core->Ln(3*$altura_celda);
$this->Pdf->core->setEqualColumns(1, (2)*($CONSTANTECOLUMNA));
$this->Pdf->core->selectColumn(0);
$this->Pdf->core->setFont('Helvetica','',$tamaño_letra/2);
$this->Pdf->core->MultiCell((2)*($CONSTANTECOLUMNA), $altura_celda, 'Firma y Sello Director EE.PP.', 0, 'C', 0, 0, '', '', true, 0, false, true, $altura_celda, 'M');
$this->Pdf->core->setEqualColumns(1, (2)*($CONSTANTECOLUMNA));
$this->Pdf->core->selectColumn(0);
$this->Pdf->core->MultiCell((2)*($CONSTANTECOLUMNA), $altura_celda, '', 0, 'C', 0, 0, '', '', true, 0, false, true, $altura_celda, 'M');
$this->Pdf->core->setEqualColumns(1, (2)*($CONSTANTECOLUMNA));
$this->Pdf->core->selectColumn(0);
$this->Pdf->core->MultiCell((2)*($CONSTANTECOLUMNA), $altura_celda, 'Firma y Sello Administrador EE.PP', 0, 'C', 0, 0, '', '', true, 0, false, true, $altura_celda, 'M');
#...........FIRMA..............
$this->Pdf->core->Ln($altura_celda+1); # Fin del documento
} else {
/*añadimos una página en formato A4 (formato por defecto) */
$this->Pdf->core->Addpage();
$this->Pdf->core->Ln(1);
$this->Pdf->core->MultiCell(0, 0,$mgs, 0, 'C', 0, 0, '', '', true, 0, false, true, 0, 'M');
}


# Visualizamos el documento
$this->Pdf->core->Output();
$this->Pdf->core->Output($nombre_archivo, 'D');
/*$estoy_aqui="(x=".$this->Pdf->core->GetX()." y=".$this->Pdf->core->GetY().")";
$this->Pdf->core->Cell(100,0,"subtitulo ".$estoy_aqui,1);*/
?>
