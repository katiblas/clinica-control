<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" href="../../js1/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" href="../../css1/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../estilo.css" />
    <link rel="stylesheet" type="text/css" href="../fonts/font.css" />

   <script src="../../js1/bootstrap.min.js"></script>
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
include ("../../clase.php");
session_start();
$usuario=$_REQUEST['usua'];//AQUI RECIBIMOS LA VARIABLE usua

?>
<div class="container-fluid bg-2 ">
	<a href="../index.php?usua=<?php echo $usuario;?>"><img src="../../icon/atras.png" style="width: 40px; margin: 10px;" alt="Bird"></a>
    </div>
<section>
  <?php 
  include("../../conexion.php");
    $ci_p=$_GET['ci'];
  session_start();

$usuario=$_REQUEST['usua'];

?>
<?php 
  include("../../conexion.php");
    $ci_p=$_GET['ci'];
  session_start();

$usuario=$_REQUEST['usua'];

?>
  <form action="../pacientes/buscar-paciente2.php?usua=<?php echo "".$usuario; ?>" method="get" name="form2" >

        <br><center>
          <input type="hidden" value="<?php echo "".$usuario; ?>" name="usua">
<tr><td ><h4 class="glyphicon-asterisk">Ingrese Cedula del Paciente</h4></td></tr>
<div class="container-fluid bg-success ">


<input type="text" name="buscar" id="buscar" class="" >
<input type="submit" id="btn-buscar" name="btn-buscar" value="Buscar" class="btn-success" >
</div>
</center>

</table>


    </form>
<form action="incluirR.php?usua=<?php echo $usuario;?>&<?php echo $ci_p ?>" method="post" name="frm">
<table border="0"  class="table" >	
	<tr>
		<td>Descripcion</td>
		<td><input type="text" name="descripcion" id="descripcion" required=""></td>
	</tr>
<tr>
<td>Paciente</td>
<td><input type="text" value="<?php echo "" .$ci_p; ?>" id="ci_p" name="ci_p"></td>
</tr>

<tr><td><input type="text" style="display: none; " name="num_a" id="num_a" value="<?php echo "".$codigo;?>"  ></td></tr>
</table>
<center>
<input type="submit" name="btn" id="btn" value="Siguiente" class="btn-success">
</center>
</form>

</body>
</html>