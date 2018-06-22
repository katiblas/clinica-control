<?php
include "../conexion.php";
 	$usuario1=$_GET['usuario'];
 	$id_usu=$_GET['id'];
 	$usuario=$_GET['usua'];
 	echo "" .$usuario;
 	
 	eliminar($_GET['id']);

 function eliminar($id_usu)
 {


 	$sql=mysql_query("DELETE FROM usuarios WHERE id_usu='".$id_usu."' ");
 }
	        header("Location: ../gestiones/gestion-usu.php?usua=$usuario");

?>