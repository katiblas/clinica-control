<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, user-scalable=no">
<link rel="stylesheet" type="text/css" href="estilo.css" />
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
</head>

<title>Medicos</title>

<body>
<style type="text/css">
	 .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
</style>
  

<div class="container-fluid bg-2 ">
	<a href="../index.php"><img src="../icon/atras.png" style="width: 40px; margin: 10px;" alt="Bird"></a>
    </div>
<?php 
     include("../conexion.php");
    	$sql=mysql_query("select cod_esp, nombre from especialidad");
    	$sql2=mysql_query("SELECT ci_p,nombre FROM Paciente");
?>
<form action="../medicos/incluir-m.php" method="post">
<table border="0"  class="table" >
<tr>
<td>Cedula</td>
<td><input type="text" name="ci_m" id="ci_m"></td>
</tr>
<tr>
<td>Nombre</td>
<td><input type="text" name="nombre" id="nombre"></td>
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