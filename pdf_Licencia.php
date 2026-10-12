<?php
require('fpdf.php');
include("Controlador.php");

$Con=Conectar();
$Numlicencia = $_GET['ID'];

$SQL= "SELECT * FROM datoslicencia where NumLicencia = '$Numlicencia';";
$ResultSet=ejecutar($Con, $SQL);
$DatosCuenta=mysqli_fetch_row($ResultSet);

$pdf = new FPDF();
$pdf->SetMargins(0,0,);
$pdf->SetAutoPageBreak(true,0);
$pdf->__construct('P', 'mm', array(53, 85));
$pdf->SetAutoPageBreak(true,1);


$pdf->AddPage(); 
$pdf->SetFont('Arial','',5);
//$pdf->SetXY(50,50);

//$pdf->Cell(60,10,'Hello World!','1','1');
//$pdf->Cell(60,10,'wowowow','1');
$pdf->Image("escudo.png", '6', '3','10','13');
$pdf->SetXY(17,3);
$pdf->MultiCell('30','4','Estados Unidos Mexicanos','L','L',);
$pdf->SetXY(17,5);
$pdf->Cell('0','4','Poder Ejecutivo del Estado de Queretaro','L','L',);

$pdf->SetFont('Arial','B',5);
$pdf->SetXY(17,7);
$pdf->Cell('0','5','Secretaria de Seguridad Ciudadana','L','L',);
$pdf->SetFont('Arial','B',6);
$pdf->SetXY(17,8);
$pdf->Cell('0','8','Licencia para conducir','L','L',);

$pdf->Image(''.$DatosCuenta[6].'', '28', '16','20','23');
$pdf->SetXY(18,24);
$pdf->SetFont('Arial','',3);

$pdf->Cell('30','4',' No. de Licencia','0','R',);
$pdf->SetTextColor(255,0,0);
$pdf->SetFont('Arial','B',4);
$pdf->SetXY(18,27);
$pdf->Cell('30','3',"$DatosCuenta[0]",'0','L',);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','B',3);

$pdf->SetXY(17,29);
$pdf->Cell('30','3','AUTOMOVILISTA','0','L',);
$pdf->SetXY(43,39);
$pdf->SetFont('Arial','',3);

$pdf->Cell('30','3','Nombre','0','L',);
$pdf->SetFont('Arial','B',5);
$pdf->SetXY(35,41);

$pdf->Cell('10','3',"$DatosCuenta[1]",'0','1',);
$pdf->SetXY(40,42);

$pdf->Cell('10','5',' ','0','1',);
$pdf->SetXY(27,44);
$pdf->Cell('10','6','  ','0','1',);
$pdf->SetXY(39,47);
$pdf->SetFont('Arial','B',3);
$pdf->Cell('30','3',' Observaciones','0','L',);
$pdf->SetXY(39,49);
$pdf->Cell('30','3',"$DatosCuenta[2]",'0','L',);

$pdf->SetXY(4,48);
$pdf->Cell('30','3','FechadeNacimiento','0','L',);
$pdf->SetXY(4,50);
$pdf->SetFont('Arial','',5);
$pdf->Cell('30','3',"$DatosCuenta[3]",'0','L',);
$pdf->SetFont('Arial','B',3);

$pdf->SetXY(4,53);
$pdf->Cell('30','3','FechadeExpedicion','0','L',);
$pdf->SetFont('Arial','',5);
$pdf->SetXY(4,55);
$pdf->Cell('30','3',"$DatosCuenta[4]",'0','L',);

$pdf->SetFont('Arial','B',3);
$pdf->SetXY(4,58);
$pdf->Cell('30','3','ValidaHasta','0','L',);
$pdf->SetFont('Arial','',5);
$pdf->SetXY(4,60);
$pdf->Cell('30','3',"$DatosCuenta[5]",'0','L',);

$pdf->SetFont('Arial','B',3);
$pdf->SetXY(4,63);
$pdf->Cell('10','3','Antiguedad','0','L',);
$pdf->SetFont('Arial','',5);
$pdf->SetXY(4,65);
$pdf->Cell('10','3',"$DatosCuenta[8]",'0','L',);
$pdf->SetXY(5,69);
$pdf->SetFillColor(255, 255, 0);
$pdf->SetFont('Arial','B',8);

$pdf->Cell('7','7',"$DatosCuenta[9]",'0','0','C', true);
$pdf->SetXY(25,59);
$pdf->SetFont('Arial','B',3);

$pdf->Cell('30','4','Firma','0','R',);
$pdf->Image("$DatosCuenta[7]", '22', '62','10','10');
$pdf->SetXY(18,74);
$pdf->Cell('30','4','AUTORIZOPARAQUELAPRESENTESEA','0','0','L');
$pdf->SetXY(16,75);
$pdf->Cell('30','4','RECABADACOMOGARANTIADEINFRACCION','0','0','L');
$pdf->Image("QRO1.png", '42', '71','7','7');


$pdf->AddPage(); 
$pdf->Image("911a.png", '6', '3','8','8');
$pdf->SetFont('Arial','B',5);
$pdf->SetTextColor(255,255,255);
$pdf->SetFillColor(0,0,0);
$pdf->SetXY(16,5);
$pdf->Cell('20','4',"$DatosCuenta[10]",'1','0', 'C', true);
$pdf->Image("089a.png", '39', '4','7','7');
$pdf->SetXY(34,11);
$pdf->SetFont('Arial','B',3);
$pdf->SetTextColor(0,0,0);

$pdf->Cell('14','3','Domicilio','0','0','R');
$pdf->SetFont('Arial','',4);

$pdf->SetXY(34,13);
$pdf->Cell('15','3',"$DatosCuenta[11]",'0','0','R');
$pdf->SetXY(34,15);
$pdf->Cell('15','3',' ','0','0','R');
$pdf->SetXY(34,17);
$pdf->Cell('15','3',' ','0','0','R');
$pdf->SetXY(34,19);
$pdf->Cell('15','3',' ','0','0','R');
$pdf->Image("carros1.png", '5', '21','45','6');

$pdf->SetXY(6,26);
$pdf->SetFont('Arial','B',3);
$pdf->Cell('14','3','Restricciones','0','0','L');
$pdf->SetFont('Arial','',4);

$pdf->SetXY(6,28);
$pdf->Cell('15','3',"$DatosCuenta[12]",'0','0','L');
$pdf->SetXY(34,26);
$pdf->SetFont('Arial','B',3);
$pdf->Cell('14','3','Grupo Sanguineo','0','0','R');
$pdf->SetFont('Arial','',4);

$pdf->SetXY(34,28);
$pdf->Cell('15','3',"$DatosCuenta[13]",'0','0','R');

$pdf->SetXY(34,30);
$pdf->SetFont('Arial','B',3);
$pdf->Cell('14','3','DondaDor de organos','0','1','R');
$pdf->SetFont('Arial','',4);
$pdf->SetXY(34,32);
$pdf->Cell('15','3',"$DatosCuenta[14]",'0','1','R');

$pdf->SetXY(34,34);
$pdf->SetFont('Arial','B',3);
$pdf->Cell('14','3','Numero de Emergencia','0','1','R');
$pdf->SetFont('Arial','',4);
$pdf->SetXY(34,36);
$pdf->Cell('15','3',"$DatosCuenta[15]",'0','1','R');
$pdf->Image("firme1.png", '36', '39','10','10');
$pdf->SetXY(25,50);
$pdf->SetFont('Arial','B',3);
$pdf->Cell('25','3','MTRO. EN GPA. MIGUEL ANGEL CONTRERAS ALVAREZ','0','0','R');
$pdf->SetXY(25,51);
$pdf->Cell('25','3','SECRETARIO DE SEGURIDAD CIUDADANA','0','0','R');
$pdf->SetXY(5,52);
$pdf->SetFont('Arial','B',3);
$pdf->Cell('14','3','Fundamento Legal','0','0','L');
$pdf->SetFont('Arial','',3);
$pdf->SetXY(5,53);
$pdf->Cell('45','3','Articulo 19 fraccion xly33 fraccion de la ley Organica del Poder Ejecutivo de Estado de ','0','0','L');
$pdf->SetXY(5,54);

$pdf->Cell('45','3','Queretaro, articulo9 graccion Xly55 de la Ley de Transito del Estado de Queretaro','0','0','L');
$pdf->SetXY(5,55);
$pdf->Cell('45','3','articulo4 de la Ley de Procedimientos Administrativo del Estado de Queretaro','0','0','L');
$pdf->SetXY(5,56);
$pdf->Cell('45','3',', artiuclo134,135,136,137,138,138,140,141,142 y 143 del Reglamento de Transito','0','0','L');
$pdf->SetXY(5,57);
$pdf->Cell('45','3',',de Estado de Queretaro, artiuclo9 fraccion, inciso 20 de la Secretaria de Seguirdad.','0','0','L');

$pdf->SetXY(38,67);
$pdf->SetFont('Arial','B',4);

$pdf->Cell('29','4','SECRETARIA','L','L','L');
$pdf->SetXY(38,69);
$pdf->Cell('29','4','DE SEGURIDAD','L','L','L');
$pdf->SetXY(38,71);
$pdf->Cell('29','4','CIUDADANA','L','L','L');
$pdf->SetXY(30,73);
$pdf->Image("qror1.png", '29', '66','8','10');


$pdf->Output();

Desconectar($Con);
?>