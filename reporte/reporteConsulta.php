<?php
require('plantilla.php');
include("../clase.php");

 session_start();

$usuario=$_REQUEST['usua'];
$START_DATE=$_GET['ini'];
$END_DATE=$_GET['fina'];



include('../conexion.php');

$consulta = mysql_query("SELECT T5.cod_c,T5.fecha,T5.diagnostico, T5.tratamiento, T5.ci_m,T5.ci_p, T10.nombre_m as nombre_m, nombre FROM consultas T5 INNER JOIN medicos T10 ON T5.ci_m = T10.ci_m INNER JOIN paciente T11 ON T5.ci_p = T11.ci_p WHERE fecha BETWEEN '$START_DATE' AND '$END_DATE'");
//$consulta2 = mysql_query("SELECT paciente.ci_p, paciente.nombre, paciente.apellido, paciente.edad, paciente.direccion, medicos.nombre   from paciente INNER JOIN medicos on medicos.ci_p= paciente.ci  ");

$pdf=new PDF();
$pdf->AddPage();
	$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(25,6,'FECHA',1,0,'L',1);
$pdf->Cell(40,6,'DIAGNOSTICO',1,0,'L',1);
$pdf->Cell(40,6,'TRATAMIENTO',1,0,'L',1);
$pdf->Cell(20,6,'MEDICO',1,0,'L',1);
$pdf->Cell(20,6,'PACIENTE',1,1,'L',1);







while($resultado = mysql_fetch_array($consulta)){

		$pdf->Cell(25,6,utf8_decode($resultado['fecha']),1,0,'L',1);
		$pdf->Cell(40,6,utf8_decode($resultado['diagnostico']),1,0,'L');
		$pdf->Cell(40,6,utf8_decode($resultado['tratamiento']),1,0,'L');
	    $pdf->Cell(20,6,utf8_decode($resultado['nombre_m']),1,0,'L');
	    $pdf->Cell(20,6,utf8_decode($resultado['nombre']),1,1,'L');
	}
$pdf->Output();
?>