<?php
require('plantilla.php');
include("../clase.php");

 session_start();

$usuario=$_REQUEST['usua'];
include('../conexion.php');
$ci_p=$_GET['ci_p'];

 $consulta=mysql_query("SELECT `ci_p`, `nombre`, `apellido`, `edad`, `direccion`, `sexo`, `cod_enf` FROM `paciente`  WHERE ci_p='".$ci_p."' "); 
 

$pdf=new PDF();
$pdf->AddPage();
	$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(25,6,'Cedula',1,0,'L',1);
$pdf->Cell(30,6,'Nombre',1,0,'L',1);
$pdf->Cell(30,6,'Apellido',1,0,'L',1);
$pdf->Cell(30,6,'Edad',1,0,'L',1);
$pdf->Cell(30,6,'Direccion',1,0,'L',1);
$pdf->Cell(30,6,'Sexo',1,0,'L',1);
$pdf->Cell(20,6,'cod_enf',1,1,'L',1);
while($resultado = mysql_fetch_array($consulta)){

		$pdf->Cell(25,6,utf8_decode($resultado['ci_p']),1,0,'L',1);
		$pdf->Cell(30,6,utf8_decode($resultado['nombre']),1,0,'L');
		$pdf->Cell(30,6,utf8_decode($resultado['apellido']),1,0,'L');
				$pdf->Cell(30,6,utf8_decode($resultado['edad']),1,0,'L');
		$pdf->Cell(30,6,utf8_decode($resultado['direccion']),1,0,'L');
				$pdf->Cell(30,6,utf8_decode($resultado['sexo']),1,0,'L');
	    $pdf->Cell(20,6,utf8_decode($resultado['cod_enf']),1,1,'L');
	}



$pdf->Output();



?>
