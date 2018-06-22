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
</head>
<title>Usuarios</title>

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
	<a href="../gestiones/gestion-usu.php?usua=<?php echo $usuario;?>"><img src="../icon/atras.png" style="width: 40px; margin: 10px;" alt="Bird"></a>
    </div>
<section>
<?php

 $sql = "SELECT * FROM usuarios where nivel='usuario'";
  $RESULT = mysql_query($sql,$mysql);
  while($rows=mysql_fetch_array( $RESULT)){ 
  	?>
  		<form  method="get">

	<table border="0"  class="table" style="color: black;"  >
	<tr>
			    <td style="color: black; background: #ccc;">id</td>

	    <td style="color: black; background: #ccc;">Clave</td>
	    <td style="color: black;  background: #ccc; ">usuario</td>
		<td style="color: black;  background: #ccc;">nombre</td>
	    <td style="color: black;  background: #ccc;">apellido</td>
		<td style="color: black;  background: #ccc;">cedula</td>
				<td style="color: black;   background: #ccc;"></td>
								<td style="color: black;   background: #ccc;"></td>
												<td style="color: black;   background: #ccc;"></td>



</tr>
	  <td><input type="hidden" value="<?php echo "" .$usuario;?>" name="usua" id="usua"></td>

<tr>

	<td class="input-group-addon"><input type="text" name="id_usu" value="<?php echo "" .$rows['id_usu']; ?>" style="width: 40px;">
	</td>
	<td class="input-group-addon"><input type="password" name="clave" id="clave" value="<?php echo "" .$rows['clave']; ?>" readonly style="width: 100px;"></td>
	<td class="input-group-addon"><input type="text" name="usuario" id="usuario" required readonly value="<?php echo "" .$rows['usuario']; ?>" style="width: 150px;"></td>
		<td class="input-group-addon"><input type="text" name="nombre" id="nombre" required readonly value="<?php echo "" .$rows['nombre']; ?>" style="width: 150px;"></td>

	<td class="input-group-addon"><input type="text" name="apellido" id="apellido" required readonly value="<?php echo "" .$rows['apellido'];?>" style="width: 150px;"></td>
		<td class="input-group-addon"><input type="text" name="cedula" id="cedula" required readonly value="<?php echo "" .$rows['cedula'];?>" style="width: 120px;"></td>

					<td  class="input-group-addon"><a href="modificar.php?usuario=<?php  echo "" .$rows['usuario'];  ?>&id=<?php  echo "" .$rows['id_usu'];  ?>&usua=<?php echo "" .$usuario; ?>"><input type="button" name="btn" Value="Modificar" class="btn-primary"></a></td>

			<td  class="input-group-addon"><a href="elimina.php?usuario=<?php echo "" .$rows['usuario']; ?>&id=<?php echo "" .$rows['id_usu']; ?>&usua=<?php echo "" .$_GET['usua'] ?>"><input type="button" name="btn" Value="Eliminar" class="btn-primary"></a></td>
</tr>
	
</table>
	</form>

<?php
	}
	?>


		
</section>
	
	

</body>
</html>