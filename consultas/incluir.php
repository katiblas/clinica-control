<?php
	include("../clase.php");
	session_start();

$usuario=$_REQUEST['usua'];//AQUI RECIBIMOS LA VARIABLE usua
	$cod_c=$_POST['cod_c'];
	$fecha=$_POST['fecha'];
	$diagnostico=$_POST['diagnostico'];
	$tratamiento=$_POST['tratamiento'];
	$ci_m=$_POST['ci_m'];
		$ci_p=$_POST['ci_p'];

	$consult = new consulta ();
	$consult->setCod_c($cod_c);
		$consult->setFecha($fecha);
	$consult->setDiagnostico($diagnostico);
	$consult->setTratamiento($tratamiento);
	$consult->setCi_m($ci_m);
		$consult->setCi_p($ci_p);

	


	
	 $filas = $consult->incluirC();
	if ($filas > 0)
	        header("Location: ../usuario/index-admin.php?usua=$usuario");
		else
		    	echo "no se a guardado";
			
?>