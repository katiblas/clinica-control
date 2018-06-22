<?php
require('plantilla.php');
include("../clase.php");

 session_start();

$usuario=$_REQUEST['usua'];
$START_DATE=$_GET['ini'];
$END_DATE=$_GET['fina'];



include('../conexion.php');

$consulta = mysql_query("SELECT a.num_a, a.fecha,r.num_a,r.cod_r,r.descripcion, r.ci_p,p.nombre  FROM analisis a inner join registro r inner join paciente p  WHERE fecha BETWEEN  '$START_DATE' AND '$END_DATE' and r.num_a=a.num_a and p.ci_p=r.ci_p");
//$consulta2 = mysql_query("SELECT paciente.ci_p, paciente.nombre, paciente.apellido, paciente.edad, paciente.direccion, medicos.nombre   from paciente INNER JOIN medicos on medicos.ci_p= paciente.ci  ");

$pdf=new PDF();
$pdf->AddPage();
	$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(25,6,'ID',1,0,'L',1);
$pdf->Cell(40,6,'DESCRIPCION',1,0,'L',1);
$pdf->Cell(40,6,'PACIENTE',1,0,'L',1);
$pdf->Cell(20,6,'FECHA',1,1,'L',1);







while($resultado = mysql_fetch_array($consulta)){

		$pdf->Cell(25,6,utf8_decode($resultado['cod_r']),1,0,'L',1);
		$pdf->Cell(40,6,utf8_decode($resultado['descripcion']),1,0,'L');
		$pdf->Cell(40,6,utf8_decode($resultado['nombre']),1,0,'L');
	    $pdf->Cell(20,6,utf8_decode($resultado['fecha']),1,1,'L');
	}
$pdf->Output();
?>