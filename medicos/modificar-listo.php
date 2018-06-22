<?php
include "../conexion.php";
 	$usuario1=$_GET['id'];
 	$ci_m=$_GET['ci_m'];
 	$usuario=$_GET['usua'];
 	
echo "hola" .$ci_m;
 	modificar($_GET['ci_m'],$_GET['nombre_m'],$_GET['apellido'],$_GET['cod_esp']);

 function modificar($ci_m,$nombre_m,$apellido,$cod_esp)
 {


 	$sql=mysql_query("UPDATE medicos SET ci_m='".$ci_m."',nombre_m='".$nombre_m."',apellido='".$apellido."' where ci_m='".$ci_m."' ");
 }
	        header("Location: ../medicos/lista-medicos.php?usua=$usuario");

?>