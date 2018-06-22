<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="../js1/jquery.min.js"></script>

  <link rel="stylesheet" href="../css1/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../estilo.css" />
    <link rel="stylesheet" type="text/css" href="../fonts/font.css" />
   <script src="../js1/bootstrap.min.js"></script>
            <link rel="stylesheet" href="../css/style.css">

</head>
<title>Usuario</title>
<?php
include ("../clase.php");

session_start();
$usuario=$_REQUEST['usua'];//AQUI RECIBIMOS LA VARIABLE usua
include("../conexion.php");

$usuario=$_REQUEST['usua'];

  $sql = "SELECT * FROM usuarios WHERE usuario = '".$usuario."' ";
  $RESULT = mysql_query($sql,$mysql);
  $rows=mysql_fetch_array( $RESULT) ;
  ?>

<body>
<style type="text/css">
	 .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
</style>
<div class="container-fluid bg-2 ">
	<a href="../menu-usua/index.php?usua=<?php echo $usuario;?>"><img src="../icon/atras.png" style="width: 40px; margin: 10px; border-radius: 20px;" alt="Bird"></a>
    </div>

<section>
	<form action="../usuario/modificar3.php?usua=<?php echo "" .$usuario;?>&id=<?php echo "" .$_GET['id_usu']; ?>" method="get" name="frm">

<table border="0"  class="table" style="color: black;"  >
	<tr>
	<td style="color: black;" hidden>id</td>
	<td><input type="hidden" name="id_usu" id="id_usu" value="<?php echo "" .$rows['id_usu']; ?>"  readonly></td>
	
	</tr>
	<tr>
	<td style="color: black;">Clave</td>
	<td><input type="password" name="clave" id="clave" value="<?php echo "" .$rows['clave']; ?>" readonly></td>
	
	</tr>
		
	<tr>
	<td style="color: black;">Usuario</td>
		<td><input type="text" name="usuario" id="usuario" required readonly value="<?php echo "" .$usuario;?>"></td>
</tr>
<tr>
	<td style="color: black;">Nombre</td>
		<td><input type="text" name="nombre" id="nombre" required readonly value="<?php echo "" 
		.$rows['nombre']; ?>"></td>
</tr>
<tr>
	<td style="color: black;">Apellido</td>
		<td><input type="text" name="apellido" id="apellido" required readonly value="<?php echo "" .$rows['apellido'];?>"></td>
</tr>
<tr>
	<td style="color: black;">Cedula</td>
		<td><input type="text" name="cedula" id="cedula" required readonly value="<?php echo "" .$rows['cedula'];?>"></td>
</tr>


	
</table>
<center>
<input type="submit" name="btn" id="btn" value="Cambiar datos" class="btn-success">
</center>



	</form>
		
</section>
	

</body>
</html>