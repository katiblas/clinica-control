<?php
include "../conexion.php";
 	$usuario1=$_GET['usuario'];
 	$id_usu=$_GET['id'];
 	$usuario=$_GET['usua'];
 	
echo "hola" .$usuario1;
 	modificar($_GET['id_usu'],$_GET['clave'],$_GET['usuario'],$_GET['nombre'],$_GET['apellido'],$_GET['cedula']);

 function modificar($id_usu,$clave,$usuario,$nombre,$apellido,$cedula)
 {


 	$sql=mysql_query("UPDATE usuarios SET clave='".$clave."',usuario='".$usuario."',nombre='".$nombre."',apellido='".$apellido."',cedula='".$cedula."' where id_usu='".$id_usu."' ");
 }
	        header("Location: ../usuario/usuario.php?usua=$usuario1");

?>