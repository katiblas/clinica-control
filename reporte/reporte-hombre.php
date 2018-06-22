<?php
require('plantilla.php');

include('../conexion.php');

$consulta = mysql_query("SELECT p.ci_p,p.nombre,p.cod_enf,p.apellido,p.edad,p.direccion,p.sexo,e.nombre_enf as nombre_enf from paciente p INNER JOIN enfermedades e where p.cod_enf=e.cod_enf and sexo='Masculino'");
//$consulta2 = mysql_query("SELECT paciente.ci_p, paciente.nombre, paciente.apellido, paciente.edad, paciente.direccion, medicos.nombre   from paciente INNER JOIN medicos on medicos.ci_p= paciente.ci  ");

$pdf=new PDF();
$pdf->AddPage();
	$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(25,6,'CEDULA',1,0,'L',1);
$pdf->Cell(25,6,'NOMBRE',1,0,'L',1);
$pdf->Cell(20,6,'APELLIDO',1,0,'L',1);
$pdf->Cell(20,6,'EDAD',1,0,'L',1);
$pdf->Cell(20,6,'SEXO',1,0,'L',1);


$pdf->Cell(40,6,'DIRECCION',1,0,'L');
$pdf->Cell(40,6,'ENFERMEDAD',1,1,'L',1);





while($resultado = mysql_fetch_array($consulta)){

		$pdf->Cell(25,6,utf8_decode($resultado['ci_p']),1,0,'L',1);
		$pdf->Cell(25,6,utf8_decode($resultado['nombre']),1,0,'L');
		$pdf->Cell(20,6,utf8_decode($resultado['apellido']),1,0,'L');
	    $pdf->Cell(20,6,utf8_decode($resultado['edad']),1,0,'L');
	    $pdf->Cell(20,6,utf8_decode($resultado['sexo']),1,0,'L');
	    $pdf->Cell(40,6,utf8_decode($resultado['direccion']),1,0,'L');

	    $pdf->MultiCell(40,6,utf8_decode($resultado['nombre_enf']),1,1,'L');



	} 
$pdf->Output();
?>