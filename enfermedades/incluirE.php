<?php
	include("../clase.php");
	include("../conexion.php");

session_start();
$usuario=$_REQUEST['usua'];//AQUI RECIBIMOS LA VARIABLE usua
	$nombre_enf=$_POST['nombre_enf'];
	
	$sql=mysql_query("SELECT nombre_enf FROM enfermedades WHERE nombre_enf='".$nombre_enf."'");//para validar
    $rows=mysql_fetch_array($sql);

	if ($_POST['nombre_enf']!= $rows['nombre_enf']){
		$enfer = new enfermedad ();
	$enfer->setNombre_enf($nombre_enf);
		 $filas = $enfer->incluirE();


 header("Location: enfermedad.php?usua=$usuario");

		 }
 echo"<script type='text/javascript'>

      alert('Ya fue Registrada')
       </script>";
       echo"<script>window.location.replace('enfermedad.php?usua=$usuario');
		</script>";
			
?>