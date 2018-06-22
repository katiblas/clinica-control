<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="../js1/jquery.min.js"></script>
  <link rel="stylesheet" href="../css1/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../fonts/font.css" />
   <script src="../js1/bootstrap.min.js"></script>
         <link rel="stylesheet" href="../css/style.css">

</head>

<title>Medicos</title>
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
function sololetras(){
if (event.keyCode >45 && event.keyCode  <57) event.returnValue = false;
}
</script>
<?php
include ("../clase.php");
include("../conexion.php");

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
  <a href="lista-medicos.php?usua=<?php echo $usuario;?>"><input type="submit" name="btn" id="btn" value="Lista de Medicos" class="btn-primary " style="width: 15%; height: 50px;"></a>
    </div>
    <h2 class="text-primary"><span><img src="../icon/medico.png" style="width: 4%; height: 4%;" alt="bird">  Ingresar Medicos</span></h2>

<?php 
     include("../conexion.php");
    	$sql=mysql_query("select cod_esp, nombre from especialidad");
    	$sql2=mysql_query("SELECT ci_p,nombre FROM Paciente");
?>
<form action="../medicos/incluir-m.php?usua=<?php echo $usuario;?>" method="post">
<table border="0"  class="table" >
<tr>
<td>Cedula</td>
<td><input type="text" name="ci_m" id="ci_m" onKeyPress="return SoloNumeros(event);" required  maxlength="10"></td>
</tr>
<tr>
<td>Nombre</td>
<td><input type="text" name="nombre_m" id="nombre" maxlength="20" required onKeyPress="return sololetras();"></td>
</tr>
<tr>
	<td>Apellido</td>
	<td><input type="text" name="apellido" id="apellido"  maxlength="15"   required onKeyPress="return sololetras();"></td>

</tr>
<tr>
<td>Especialidad</td>
<td><select  id="cod_esp" name="cod_esp" class="input-sm" >
	<option value="Especialidad" >Elige...
	<?php 
	while($consulta=mysql_fetch_array($sql))
{	 echo '<option value='.$consulta['0'].'> '.$consulta['1'].' </option>'; }?> 
	</option>
</select></td>
</tr>
<tr>
<!--<td>Paciente</td>
<td><select name="ci_p" id="ci_p" class="input-sm" >
	<option>Elige...
	<?php 
//while($consulta=mysql_fetch_array($sql2))
{	 
//echo '<option value='.$consulta['0'].'-> '.$consulta['1'].'->'.$consulta['0'].' </option>'; 


}

?> -->

</option>

</select></td>
</tr>












</table>
<center><input type="submit" name="btn" value="siguiente" class="btn-success">
</center>
</form>
</body>
</body>
</html>