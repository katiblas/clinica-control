<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" href="../js1/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" href="../css1/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="estilo.css" />
  <link rel="stylesheet" type="text/css" href="../fonts/font.css" />
  <link rel="stylesheet" href="../css/style.css">
  <script src="../js1/bootstrap.min.js"></script>
</head>
<title>Paciente</title>
<script type="text/javascript">

function SoloNumeros(evt){

 if(window.event){//asignamos el valor de la tecla a keynum
  keynum = evt.keyCode; //IE
 }
 else{
  keynum = evt.which; //FF
 } 
 //comprobamos si se encuentra en el rango numérico y que teclas no recibirá.
 if((keynum > 47 && keynum < 58 ) || keynum == 8 || keynum == 13 || keynum == 6 ){
  return true;
 }
 else{
  return false;
 }
}
</script>
<script language="javascript">
function sololetras(){
if (event.keyCode >45 && event.keyCode  <57) event.returnValue = false;
}
</script>
<?php
include ("../clase.php");
session_start();
$usuario=$_REQUEST['usua'];//AQUI RECIBIMOS LA VARIABLE usua

?>
<body>
<style type="text/css">
	 .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
</style>
<div class="container-fluid bg-2 ">
	<a href="../usuario/index-admin.php?usua=<?php echo $usuario;?>"><img src="../icon/atras.png" style="width: 40px; margin: 10px;" alt="Bird"></a>
    </div>
   

<section>

	<form action="../Pacientes/incluir.php?usua=<?php echo $usuario;?>" method="post" name="frm">

<table border="0"  class="table" >
	<tr>
	<td>Cedula</td>
	<td><input type="text" name="ci_p" id="ci_p" maxlength="8" class="" required onKeyPress="return SoloNumeros(event);"></td>
	
	</tr>
	<tr>
	<td>Nombre</td>
		<td><input type="text" name="nombre" id="nombre"  maxlength="25" required onKeyPress="return sololetras(event);"></td>
</tr>
<tr>
	<td>Apellido</td>
		<td><input type="text" name="apellido" id="apellido" maxlength="25" required onKeyPress="return sololetras(event);"></td>
</tr>
	
<tr>
	<td>Edad</td>
	<td><input type="text" name="edad" id="edad" onKeyPress="return SoloNumeros(event);" required></td>
	</tr>
	<tr>
	<td>Direccion</td>
	<td><input type="text" name="direccion" id="direccion" required></td>
	</tr>

	</tr>
	<tr>
	<td>Sexo</td>
		<td>
		<select name="sexo" id="sexo" class="input-sm" >
			<option value="Femenino" >Femenino</option>
			<option value="Masculino">Masculino</option>
		</select>
		</td>
		</tr>
					<div class="multiselect" >

		<tr>
<td>Enfermedades</td>


<td><select name="cod_enf" id="cod_enf" class="input-sm" multiple="multiple" required>
	<option>Elige...
	<?php 
	 include("../conexion.php");
    	$sql=mysql_query("select cod_enf, nombre_enf from enfermedades");
while($consulta=mysql_fetch_array($sql))
{	 
echo '<option value='.$consulta['cod_enf'].'-> '.$consulta['nombre_enf'].'</option>'; 
}

?> 
</option>

</select></td>
</tr>
</div>
</table>
<center>
<input type="submit" name="btn" id="btn" value="Siguiente" class="btn-success" >
</center>



	</form>
		
</section>
	
	

</body>
</html>