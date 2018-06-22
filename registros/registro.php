<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" href="../js1/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" href="../css1/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="estilo.css" />
    <link rel="stylesheet" type="text/css" href="../fonts/font.css" />

   <script src="js/bootstrap.min.js"></script>
</head>
<title>Laboratorio</title>
<body>
	<style type="text/css">
	 .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
</style>
<?php
include ("../clase.php");
session_start();
$usuario=$_REQUEST['usua'];//AQUI RECIBIMOS LA VARIABLE usua

?>
<div class="container-fluid bg-2 ">
	<a href="../usuario/index-admin.php?usua=<?php echo  "".$usuario; ?>"><img src="../icon/atras.png" style="width: 40px; margin: 10px;" alt="Bird"></a>
    </div>
<section>
<form action="incluirR.php?usua=<?php echo $usuario; ?>" method="post" name="frm">
<table border="0"  class="table" >	
	<tr>
		<td>Descripcion</td>
		<td><input type="text" name="descripcion" id="descripcion" required=""></td>
	</tr>
   <?php
     include("../conexion.php");
          $codigo=$_REQUEST['cod'];//AQUI RECIBIMOS LA VARIABLE CEDU

   $sql2=mysql_query("SELECT ci_p,nombre FROM paciente"); ?>
<tr>
<td>Paciente</td>
<td><select  id="ci_p" name="ci_p" class="input-sm"   required>
  <option >Elige...
  <?php 
while($consulta=mysql_fetch_array($sql2))
{  
echo '<option value='.$consulta['0'].'-> '.$consulta['1'].' </option>'; 
}
?> 

</option>
</select></td>
</tr>
<tr><td><input type="text" style="display: none; " name="num_a" id="num_a" value="<?php echo "".$codigo;?>"  ></td></tr>
</table>
<center>
<input type="submit" name="btn" id="btn" value="Siguiente" class="btn-success">
</center>
</form>

</body>
</html>