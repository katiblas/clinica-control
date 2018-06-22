<?php
	include("../../clase.php");
	$num_a=$_POST['num_a'];
	$fecha=$_POST['fecha'];
		session_start();

$usuario=$_REQUEST['usua'];//AQUI RECIBIMOS LA VARIABLE usua

	
	$analisis = new analisis ();
	$analisis->setNum_a($num_a);
	$analisis->setFecha($fecha);
	 $filas = $analisis->incluirA();
	if ($filas > 0)
	        header("Location: ../registros/registro.php?cod=$num_a&usua=$usuario");
		else
		    	echo "no se a guardado";
			
?>