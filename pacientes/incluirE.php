<?php
	include("../clase.php");

	$trans_menstrual=$_POST['trans_menstrual'];
	$trans_hipertenso=$_POST['trans_hipertenso'];
	$trans_cardiaco=$_POST['trans_cardiaco'];
	$bebedor=$_POST['bebedor'];
    $fumador=$_POST['fumador'];
	$osteoporosis=$_POST['osteoporosis'];
	$dol_prostata=$_POST['dol_prostata'];
	$ci_p=$_POST['ci_p'];

	
	$enfermedad = new enfermedad ();
    $enfermedad->setTrans_menstrual($trans_menstrual);
	$enfermedad->setTrans_hipertenso($trans_hipertenso);
	$enfermedad->setTrans_cardiaco($trans_cardiaco);
	$enfermedad->setBebedor($bebedor);
	$enfermedad->setFumador($fumador);
	$enfermedad->setOsteoporosis($osteoporosis);
	$enfermedad->setDol_prostata($dol_prostata);
		$enfermedad->setCi_p($ci_p);



	 $filas = $enfermedad->incluirE();
	if ($filas > 0)
	        header("Location: ../medicos/medico.php");
		else
			

		    	echo "no se a guardado";

?>