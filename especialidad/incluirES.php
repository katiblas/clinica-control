<?php
	include("../clase.php");
	include("../conexion.php");

session_start();
$usuario=$_REQUEST['usua'];//AQUI RECIBIMOS LA VARIABLE usua
	$nombre=$_POST['nombre'];


	$sql=mysql_query("SELECT nombre FROM especialidad WHERE nombre='".$nombre."'");//para validar
    $rows=mysql_fetch_array($sql);

	if ($_POST['nombre']!= $rows['nombre']){
		$espe = new especialidad ();
	$espe->setNombre($nombre);
	 $filas = $espe->incluirES();

 header("Location: especialidades.php?usua=$usuario");

		 }
 echo"<script type='text/javascript'>

      alert('Ya fue Registrada')
       </script>";
       echo"<script>window.location.replace('especialidades.php?usua=$usuario');
		</script>";



	
		
			

		
?>