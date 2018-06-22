	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="../js/jquery.min.js"></script>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../fonts/font.css" />
   <script src="../js/bootstrap.min.js"></script>
   </head>
<title>Paciente</title>

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
    	$sql=mysql_query("select ci_p, nombre from paciente");
?>
<form  action="../Pacientes/incluirE.php" method="post" name="frm">
<table border="0"  class="table" >
<tr>
	<td>Sexo</td>
		<td>
		<select name="sexo" id="sexo" class="input-sm" onchange="if(this.value=='Femenino') {document.getElementById('trans_menstrual').disabled=false }else {document.getElementById('trans_menstrual').disabled=true}
        if(this.value=='Masculino') {document.getElementById('dol_prostata').disabled=false }
		  	else {document.getElementById('dol_prostata').disabled=true}
		  		 if(this.value=='Femenino') {document.getElementById('osteoporosis').disabled=false} 
		  else {document.getElementById('osteoporosis').disabled=true}">
			<option value="Femenino" >Femenino</option>
			<option value="Masculino">Masculino</option>
		</select>
		</td>
		<tr>
	<tr>
	<td>Transtorno Menstrual</td>
	<td>
	<input type="text" name="trans_menstrual" id="trans_menstrual" disabled  ></td>
	</tr>
	<tr>
	<td>Transtorno hipertenso</td>
	<td><input type="text" name="trans_hipertenso" id="trans_hipertenso"></td>
	</tr>
	<tr>
	<td>Transtorno cardiaco</td>
	<td><input type="text" name="trans_cardiaco" id="trans_cardiaco"></td>
	</tr>
	<tr>
	<td>Bebedor</td>
	<td><input type="text" name="bebedor" id="bebedor"></td>
	</tr>
	<tr>
	<td>Fumador</td>
	<td><input type="text" name="fumador" id="fumador"></td>
	</tr>
	<tr>
	<td>Osteoporosis</td>
	<td><input type="text" name="osteoporosis" id="osteoporosis" disabled  ></td>
	</tr>
	<tr>
	<td>Dolor de prostata</td>
	<td><input type="text" name="dol_prostata" id="dol_prostata" disabled ></td>
	</tr>
	<tr>
	<td>Paciente</td>
	<td><select  id="ci_p" name="ci_p" class="input-sm" >
	<option value="Paciente" >Elige...<?php 
	while($consulta=mysql_fetch_array($sql))
{	 echo '<option value='.$consulta['0'].'> '.$consulta['1'].' </option>'; }?> 
	</option>

</select></td>
	</tr>
	</table>
	<center>
<input type="submit" name="btn" value="Siguiente" class="btn-success">
</center>
	</form>

	</body>
	</html>