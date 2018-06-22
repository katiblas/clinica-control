<?php
if(isset($_POST['boton1'])){

include ("../clase.php");
include("../conexion.php");
session_start();
$usuario2=$_REQUEST['usua'];
	$usuario=$_POST['usuario'];
	$clave=$_POST['clave'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
		$cedula=$_POST['cedula'];

	$nivel=$_POST['nivel'];


	$sql=mysql_query("SELECT usuario FROM usuarios WHERE usuario='".$usuario."'");//para validar 
    $rows=mysql_fetch_array($sql);
    	if ($_POST['usuario']!= $rows['usuario'] ){
    		$usuario1 = new usuario ();
	$usuario1->setUsuario($usuario);
	$usuario1->setClave($clave);
	$usuario1->setNombre($nombre);
	$usuario1->setApellido($apellido);
	$usuario1->setCedula($cedula);
	$usuario1->setNivel($nivel);
	 $filas = $usuario1->incluirUsu();
	        header("Location: ../gestiones/gestion-usu.php?usua=$usuario2");

		}
		echo"<script type='text/javascript'>

      alert('Ya fue Registrado este usuario')
       </script>";
       echo"<script>window.location.replace('../gestiones/gestion-usu.php?usua=$usuario2');
		</script>";


}


?>
