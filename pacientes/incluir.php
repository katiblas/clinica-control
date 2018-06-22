<?php
	include("../clase.php");
	session_start();

$usuario=$_REQUEST['usua'];//AQUI RECIBIMOS LA VARIABLE usua
	$ci_p=$_POST['ci_p'];//pasamos la cedula por url declarando la variable cedu
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$edad=$_POST['edad'];
	$direccion=$_POST['direccion'];
	$sexo=$_POST['sexo'];
$cod_enf=$_POST['cod_enf'];

	
	$paciente = new paciente ();
	$paciente->setCi_p($ci_p);
	$paciente->setNombre($nombre);
	$paciente->setApellido($apellido);
	$paciente->setEdad($edad);
	$paciente->setDireccion($direccion);
	$paciente->setSexo($sexo);
$paciente->setCod_enf($cod_enf);

	


	
	 $filas = $paciente->incluir();
	if ($filas > 0)
	        header("Location: ../consultas/consulta.php?cedu=$ci_p&usua=$usuario");//AQUI PASAMOS LA CEDULA

		else
  include("../conexion.php");

$sql = mysql_query("SELECT ci_p FROM paciente WHERE ci_p = $ci_p ");
while($consulta=mysql_fetch_array($sql)){
$prueba=$consulta['ci_p'];
if($ci_p=$prueba){
echo"<script type='text/javascript'>

alert(' El Paciente Ya ha Sido Registrado')



</script>";
				echo"<script>window.location.replace('../consultas/consulta2.php?usua=$usuario');
				</script>";


}
}

			
?>