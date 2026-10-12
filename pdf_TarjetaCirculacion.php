<?php
require('fpdf.php');
include("Controlador.php");

$Con=Conectar();
$TarjetaID = $_GET['ID'];

$SQL= "SELECT * FROM datostarjeta where TarjetadeCirculacionid = '$TarjetaID';";
$ResultSet=ejecutar($Con, $SQL);
$DatosTarjeta=mysqli_fetch_row($ResultSet);

$pdf = new FPDF();
$pdf->SetMargins(0,0,);
$pdf->SetAutoPageBreak(true,0);
$pdf->__construct('L', 'mm', array(50, 75));
$pdf->SetAutoPageBreak(true,1);

$pdf->AddPage(); 
$pdf->SetFont('Arial','B',4);


$pdf->SetFont('Arial','B',2);
$pdf->SetXY(10, 4);
$pdf->Cell(10, 5, "TIPO DE SERVICIO", 0);

$pdf->SetFont('Arial','B',2.9);
$pdf->SetXY(10, 4);
$pdf->Cell(10, 7, "$DatosTarjeta[1]", 0);

$pdf->SetFont('Arial','B',2);
$pdf->SetXY(10, 4);
$pdf->Cell(10, 9, "PROPIETARIO", 0);

$pdf->SetFont('Arial','B',2.9);
$pdf->SetXY(20, 4);
$pdf->Cell(10, 9, "$DatosTarjeta[2]", 0);



$pdf->SetFont('Arial','B',2);
$pdf->SetXY(25, 4);
$pdf->Cell(10, 5, "HOLOGRAMA", 0);
                   
$pdf->SetFont('Arial','B',2);
$pdf->SetXY(25, 4);
$pdf->Cell(10, 7, " ", 0);


$pdf->SetFont('Arial','B',2);
$pdf->SetXY(35, 4);
$pdf->Cell(10, 5, "FOLIO", 0);

$pdf->SetFont('Arial','B',2.9);
$pdf->SetXY(35, 4);
$pdf->Cell(10, 7, "$DatosTarjeta[3]", 0);


$pdf->SetFont('Arial','B',2);
$pdf->SetXY(45, 4);
$pdf->Cell(10, 5, "VIGENCIA", 0);

$pdf->SetFont('Arial','B',2.9);
$pdf->SetXY(45, 4);
$pdf->Cell(10, 7, "$DatosTarjeta[4]", 0);


$pdf->SetFont('Arial','B',2);
$pdf->SetXY(55, 4);
$pdf->Cell(10, 5, "PLACA", 0);

$pdf->SetFont('Arial','B',2.9);
$pdf->SetXY(55, 4);
$pdf->Cell(10, 7, "$DatosTarjeta[5]", 0);


$pdf->SetFont('Arial','B',2);
$pdf->SetXY(10, 10);
$pdf->Cell(10, 5, "RFC", 0);


$pdf->SetFont('Arial','',2.9);
$pdf->SetXY(10, 10);
$pdf->Cell(10, 7, "$DatosTarjeta[6]", 0);

$pdf->SetFont('Arial','B',2);
$pdf->SetXY(10, 10);
$pdf->Cell(10, 9, "LOCALIDAD", 0);

$pdf->SetFont('Arial','',2.9);
$pdf->SetXY(10, 10);
$pdf->Cell(10, 11, "$DatosTarjeta[7]", 0);

$pdf->SetFont('Arial','B',2);
$pdf->SetXY(25, 10);
$pdf->Cell(10, 5, "NUMERO DE SERIE", 0);

$pdf->SetFont('Arial','',2.9);
$pdf->SetXY(25, 10);
$pdf->Cell(10, 7, "$DatosTarjeta[8]", 0);

$pdf->SetFont('Arial','B',2);
$pdf->SetXY(25, 10);
$pdf->Cell(10, 9, "MARCA/LINEA/SUBLINEA", 0);

$pdf->SetFont('Arial','',2.5);
$pdf->SetXY(25, 10);
$pdf->Cell(10, 11, "$DatosTarjeta[9]/$DatosTarjeta[10]", 0);


$pdf->SetFont('Arial','B',2);
$pdf->SetXY(45, 10);
$pdf->Cell(10, 5, "MODELO", 0);

$pdf->SetFont('Arial','',2.9);
$pdf->SetXY(45, 10);
$pdf->Cell(10, 7, "$DatosTarjeta[11]", 0);

$pdf->SetFont('Arial','B',2);
$pdf->SetXY(45, 10);
$pdf->Cell(10, 9, "OPERACION", 0);

$pdf->SetFont('Arial','',2.5);
$pdf->SetXY(45, 10);
$pdf->Cell(10, 11, "$DatosTarjeta[12]", 0);

$pdf->SetFont('Arial','B',2);
$pdf->SetXY(45, 10);
$pdf->Cell(10, 13, "FOLIO", 0);

$pdf->SetFont('Arial','',2.5);
$pdf->SetXY(45, 10);
$pdf->Cell(10, 15, "$DatosTarjeta[13]", 0);

$pdf->SetFont('Arial','B',2);
$pdf->SetXY(45, 10);
$pdf->Cell(10, 17, "PLACA ANT.", 0);
$pdf->SetXY(45, 10);
$pdf->Cell(10, 19, "$DatosTarjeta[14]", 0);

//MM

$pdf->SetFont('Arial','B',2);
$pdf->SetXY(10, 16);
$pdf->Cell(10, 5, "MUNICIPIO", 0);

$pdf->SetFont('Arial','',2.5);
$pdf->SetXY(10, 16);
$pdf->Cell(10, 7, "$DatosTarjeta[15]", 0);

$pdf->SetFont('Arial','',2.5);
$pdf->SetXY(10, 16);
$pdf->Cell(10, 9, "", 0);

$pdf->SetFont('Arial','B',2);
$pdf->SetXY(10, 16);
$pdf->Cell(10, 11, "NUMERO DE CONSTANCIA", 0);

$pdf->SetFont('Arial','B',2);
$pdf->SetXY(10, 16);
$pdf->Cell(10, 13, "DE INSCRIPCION", 0);
$pdf->Cell(10, 15, "$DatosTarjeta[16]", 0);


//MM



$pdf->SetFont('Arial','B',2);
$pdf->SetXY(10, 22);
$pdf->Cell(10, 5, "ORIGEN", 0);

$pdf->SetFont('Arial','',2.9);
$pdf->SetXY(10, 22);
$pdf->Cell(10, 7, "EXTRANJERO", 0);

$pdf->SetFont('Arial','B',2);
$pdf->SetXY(10, 22);
$pdf->Cell(10, 9, "COLOR", 0);

$pdf->SetFont('Arial','',2.5);
$pdf->SetXY(10, 22);
$pdf->Cell(10, 11, "$DatosTarjeta[17]", 0);

//MM

$pdf->SetFont('Arial','B',2);
$pdf->SetXY(25, 19);
$pdf->Cell(10, 5, "CILINDRAJE", 0);

$pdf->SetFont('Arial','B',2);
$pdf->SetXY(25, 19);
$pdf->Cell(10, 7, "CAPACIDAD", 0);

$pdf->SetFont('Arial','B',2);
$pdf->SetXY(25, 19);
$pdf->Cell(10, 9, "PUERTAS", 0);

$pdf->SetFont('Arial','B',2);
$pdf->SetXY(25, 19);
$pdf->Cell(10, 11, "ASIENTOS", 0);

$pdf->SetFont('Arial','B',2);
$pdf->SetXY(25, 19);
$pdf->Cell(10, 13, "COMBUSTIBLE", 0);

$pdf->SetFont('Arial','B',2);
$pdf->SetXY(25, 19);
$pdf->Cell(10, 15, "TRANSMISION", 0);

$pdf->SetFont('Arial','',2.5);
$pdf->SetXY(25, 19);
$pdf->Cell(10, 17, "$DatosTarjeta[23]", 0);


$pdf->Image("Quere1.png", '15', '29','16','10');



//

$pdf->SetFont('Arial','B',2);
$pdf->SetXY(32, 19);
$pdf->Cell(10, 5, "$DatosTarjeta[18]", 0);

$pdf->SetFont('Arial','',2);
$pdf->SetXY(32, 19);
$pdf->Cell(10, 7, "$DatosTarjeta[19]", 0);

$pdf->SetFont('Arial','B',2);
$pdf->SetXY(32, 19);
$pdf->Cell(10, 9, "$DatosTarjeta[20]", 0);

$pdf->SetFont('Arial','B',2);
$pdf->SetXY(32, 19);
$pdf->Cell(10, 11, "$DatosTarjeta[21]", 0);

$pdf->SetFont('Arial','B',2);
$pdf->SetXY(31, 19);
$pdf->Cell(10, 13, "$DatosTarjeta[22]", 0);

//

$pdf->SetFont('Arial','B',2);
$pdf->SetXY(35, 19);
$pdf->Cell(10, 5, "CVE VEHICULAR", 0);

$pdf->SetFont('Arial','',2);
$pdf->SetXY(35, 19);
$pdf->Cell(10, 7, " ", 0);

$pdf->SetFont('Arial','B',2);
$pdf->SetXY(35, 19);
$pdf->Cell(10, 9, "CLASE", 0);

$pdf->SetFont('Arial','B',2);
$pdf->SetXY(35, 19);
$pdf->Cell(10, 11, "TIPO", 0);

$pdf->SetFont('Arial','B',2);
$pdf->SetXY(35, 19);
$pdf->Cell(10, 13, "USO", 0);

$pdf->SetFont('Arial','B',2);
$pdf->SetXY(35, 19);
$pdf->Cell(10, 15, "RPA", 0);


//


$pdf->SetFont('Arial','B',2);
$pdf->SetXY(40, 19);
$pdf->Cell(10, 9, "$DatosTarjeta[24]", 0);

$pdf->SetFont('Arial','B',2);
$pdf->SetXY(40, 19);
$pdf->Cell(10, 11, "9", 0);

$pdf->SetFont('Arial','',2);
$pdf->SetXY(40, 19);
$pdf->Cell(10, 13, "$DatosTarjeta[25]", 0);



//

$pdf->SetFont('Arial','B',2);
$pdf->SetXY(45, 19);
$pdf->Cell(10, 5, "FECHA DE EXPEDICION", 0);


$pdf->SetFont('Arial','',2.5);
$pdf->SetXY(45, 19);
$pdf->Cell(10,7, "$DatosTarjeta[26]", 0);

$pdf->SetFont('Arial','B',2);
$pdf->SetXY(45, 19);
$pdf->Cell(10, 9, "OFICINA EXPEDIDORA", 0);

$pdf->SetXY(54, 19);
$pdf->Cell(10, 9, "$DatosTarjeta[27]", 0);

$pdf->SetFont('Arial','B',2);
$pdf->SetXY(45, 19);
$pdf->Cell(10, 11, "MOVIMIENTO", 0);

$pdf->SetFont('Arial','',2.5);
$pdf->SetXY(45, 19);
$pdf->Cell(10,13, "ALTA DE PLACA", 0);

$pdf->SetFont('Arial','B',2);
$pdf->SetXY(45, 19);
$pdf->Cell(10, 15, "NUMERO DE MOTOR", 0);

$pdf->SetFont('Arial','',2.5);
$pdf->SetXY(45, 19);
$pdf->Cell(10,17, "$DatosTarjeta[28]", 0);

//


$pdf->SetFont('Arial','B',4.6);
$pdf->SetXY(33, 28);
$pdf->Cell(10, 5, "PODER EJECUTIVO DEL", 0);

$pdf->SetFont('Arial','B',4.6);
$pdf->SetXY(33, 28);
$pdf->Cell(10, 8, "ESTADO DE QUERETARO", 0);

$pdf->SetFont('Arial','',2.7);
$pdf->SetXY(33, 28);
$pdf->Cell(10, 11, "SECRETARIA DE PLANEACION Y FINANZAS", 0);

$pdf->Image("QR1.png", '55', '28','10','10');







//$pdf->SetFont('Arial','',2.9);
//$pdf->SetXY(10, 10);
//$pdf->Cell(10, 11, "EL RINCON", 0)

//$FOLIO=$_POST['FOLIO'];
//$SQL="SELECT * FROM DatosMULTA WHERE FOLIO= $FOLIO;";
//$ResultSet=ejecutar($Con, $SQL);
//$DatosCuenta=mysqli_fetch_row($ResultSet)

/*$pdf->AddPage(); 
$pdf->SetFont('Arial','B',5);

$pdf->MultiCell('30','4','','L','L',);
$pdf->SetXY(10, 5);
$pdf->Cell(10, 5, "COMPROBANTE DIGITAL DE PAGO", 1);

$pdf->Image("foto.1.png", '65', '3','20','10');

$pdf->SetFont('Arial','B',3);
$pdf->SetXY(10, 15);
$pdf->Cell(10, 5, "CONDUCTOR", 1);

$pdf->SetFont('Arial','B',3);
$pdf->SetXY(10, 20);
$pdf->Cell(10, 5, "RFC", 1);

$pdf->SetFont('Arial','B',3);
$pdf->SetXY(10, 25);
$pdf->Cell(10, 5, "DOMICILIO", 1);

$pdf->SetFont('Arial','B',3);
$pdf->SetXY(20, 15);
$pdf->Cell(10, 5, "TEXTO", 1);

$pdf->SetFont('Arial','B',3);
$pdf->SetXY(20, 20);
$pdf->Cell(10, 5, "TEXTO", 1);

$pdf->SetFont('Arial','B',3);
$pdf->SetXY(20, 25);
$pdf->Cell(10, 5, "TEXTO", 1);



$pdf->SetFont('Arial','B',3);
$pdf->SetXY(10, 35);
$pdf->Cell(10, 5, "FECHA", 1);

$pdf->SetFont('Arial','B',3);
$pdf->SetXY(10, 40);
$pdf->Cell(10, 5, "FECHA LIMITE", 1);

$pdf->SetFont('Arial','B',3);
$pdf->SetXY(10, 45);
$pdf->Cell(10, 5, "IMPOTE/MOTIVO", 1);

$pdf->SetFont('Arial','B',3);
$pdf->SetXY(10, 50);
$pdf->Cell(10, 5, "CAUSA/MOTIVO", 1);


$pdf->SetFont('Arial','B',3);
$pdf->SetXY(20, 35);
$pdf->Cell(10, 5, "TEXTO", 1);

$pdf->SetFont('Arial','B',3);
$pdf->SetXY(20, 40);
$pdf->Cell(10, 5, "TEXTO", 1);

$pdf->SetFont('Arial','B',3);
$pdf->SetTextColor(255,0,0);
$pdf->SetXY(20, 45);
$pdf->Cell(10, 5, "$00.0", 1);



$pdf->SetFont('Arial','B',3);
$pdf->SetTextColor(0,0,0);
$pdf->SetXY(20, 50);
$pdf->Cell(10, 5, "X", 1);

$pdf->SetFont('Arial','',4);
$pdf->SetXY(10, 60);
$pdf->Cell(10, 5, "Pagar en:", 1);


$pdf->Image("foto2.png", '30', '65','40','8');

*/


$pdf->Output();
?>




