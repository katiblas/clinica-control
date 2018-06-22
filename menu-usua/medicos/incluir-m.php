<?php
	include("../clase.php");
	$ci_m=$_POST['ci_m'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];

	$cod_esp=$_POST['cod_esp'];




	
	$medico = new medico ();
	$medico->setCi_m($ci_m);
	$medico->setNombre($nombre);
	$medico->setApellido($apellido);
	$medico->setCod_esp($cod_esp);



	
	 $filas = $medico->incluirM();
	if ($filas > 0)
	        header("Location: ../consultas/consulta.php");
		else
		    	echo "no se a guardado";
			
?>