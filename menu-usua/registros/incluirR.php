<?php
	include("../../clase.php");
	session_start();
	    $usuario=$_REQUEST['usua'];//AQUI RECIBIMOS LA VARIABLE usua

	$cod_r=$_POST['cod_r'];
    $descripcion=$_POST['descripcion'];
	$ci_p=$_POST['ci_p'];
	$num_a=$_POST['num_a'];

	$regist = new registro ();
	$regist->setCod_r($cod_r);
	$regist->setDescripcion($descripcion);
    $regist->setCi_p($ci_p);
	$regist->setNum_a($num_a);

	 $filas = $regist->incluirR();
	if ($filas > 0)
	        header("Location: ../index.php?usua=$usuario");
		else
		    	echo "no se a guardado";
			
?>