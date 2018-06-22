<?php
include "../conexion.php";
 	$usuario1=$_GET['usuario'];
 	$ci_m=$_GET['id'];
 	$usuario=$_GET['usua'];
 	echo "" .$usuario;
 	
 	eliminar($_GET['id']);

 function eliminar($ci_m)
 {


 	$sql=mysql_query("DELETE FROM medicos WHERE ci_m='".$ci_m."' ");
 }
	        header("Location: ../medicos/lista-medicos.php?usua=$usuario");

?>