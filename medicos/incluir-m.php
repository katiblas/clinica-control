<?php
	include("../clase.php");

session_start();
$usuario=$_REQUEST['usua'];//AQUI RECIBIMOS LA VARIABLE usua
	$ci_m=$_POST['ci_m'];
	$nombre_m=$_POST['nombre_m'];
	$apellido=$_POST['apellido'];

	$cod_esp=$_POST['cod_esp'];




	
	$medico = new medico ();
	$medico->setCi_m($ci_m);
	$medico->setNombre_m($nombre_m);
	$medico->setApellido($apellido);
	$medico->setCod_esp($cod_esp);



	
	 $filas = $medico->incluirM();
	if ($filas > 0)
	        header("Location: medico.php?usua=$usuario");
		else 

  include("../conexion.php");
$sql = mysql_query("SELECT ci_m FROM medicos WHERE ci_m = $ci_m ");
while($consulta=mysql_fetch_array($sql)){
	$ci_m=$consulta['ci_m'];

			if($ci_m==$consulta['ci_m']){

echo"<script type='text/javascript'>

alert(' El Medico Ya ha Sido Registrado')



</script>";
				echo"<script>window.location.replace('medico.php?usua=$usuario');
				</script>";
}
}
		    ///////////////////////////////////////////////////////////

		    
			
?>