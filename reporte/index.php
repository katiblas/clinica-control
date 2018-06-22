<?php
require('plantilla.php');

include('../conexion.php');

$consulta = mysql_query("SELECT * FROM paciente  where sexo ='Femenino' ");
//$consulta2 = mysql_query("SELECT paciente.ci_p, paciente.nombre, paciente.apellido, paciente.edad, paciente.direccion, medicos.nombre   from paciente INNER JOIN medicos on medicos.ci_p= paciente.ci  ");

$pdf=new PDF();
$pdf->AddPage();
	$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(25,6,'CEDULA',1,0,'C',1);
$pdf->Cell(25,6,'NOMBRE',1,0,'C',1);
$pdf->Cell(20,6,'APELLIDO',1,0,'C',1);
$pdf->Cell(20,6,'EDAD',1,0,'C',1);
$pdf->Cell(20,6,'SEXO',1,0,'C',1);

$pdf->Cell(40,6,'DIRECCION',1,1,'C');




while($resultado = mysql_fetch_array($consulta)){

		$pdf->Cell(25,6,utf8_decode($resultado['ci_p']),1,0,'C',1);
		$pdf->Cell(25,6,utf8_decode($resultado['nombre']),1,0,'C');
		$pdf->Cell(20,6,utf8_decode($resultado['apellido']),1,0,'C');
	    $pdf->Cell(20,6,utf8_decode($resultado['edad']),1,0,'C');
	    $pdf->Cell(20,6,utf8_decode($resultado['sexo']),1,0,'C');

	    $pdf->MultiCell(40,6,utf8_decode($resultado['direccion']),1,1,'C');

	} 
$pdf->Output();
?>
