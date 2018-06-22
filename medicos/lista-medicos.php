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
<title>Medicos</title>

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
	<a href="../medicos/medico.php?usua=<?php echo $usuario;?>"><img src="../icon/atras.png" style="width: 40px; margin: 10px;" alt="Bird"></a>
    </div>
<section>
<?php

 $sql = "SELECT m.ci_m,m.nombre_m,m.apellido,m.cod_esp,e.nombre as nombre FROM medicos m inner join  especialidad e on  m.cod_esp=e.cod_esp  ";
  $RESULT = mysql_query($sql,$mysql);
  while($rows=mysql_fetch_array( $RESULT)){ 
  	?>
  		<form  method="get">

	<table border="0"  class="table"  style="color: black;"  >
	<tr>

	    <td style="color: black; background: #ccc;">Cedula</td>
	    <td style="color: black;  background: #ccc; ">Nombre</td>
		<td style="color: black;  background: #ccc;">Apellido</td>
	    <td style="color: black;  background: #ccc;">Especialidad</td>
				<td style="color: black;   background: #ccc;"></td>
								<td style="color: black;   background: #ccc;"></td>
												<td style="color: black;   background: #ccc;"></td>



</tr>
	  <td><input type="hidden" value="<?php echo "" .$usuario;?>" name="usua" id="usua"></td>

<tr>
	

	<td class="input-group-addon"><input type="text" name="ci_m" value="<?php echo "" .$rows['ci_m']; ?>" style="width: 80px;">
	</td>
	<td class="input-group-addon"><input type="text" name="nombre_m" id="nombre_m" value="<?php echo "" .$rows['nombre_m']; ?>" readonly style="width: 100px;"></td>
	<td class="input-group-addon"><input type="text" name="apellido" id="apellido" required readonly value="<?php echo "" .$rows['apellido']; ?>" style="width: 150px;"></td>
		<td class="input-group-addon"><input type="text" name="cod_esp" id="cod_esp" required readonly value="<?php echo "" .$rows['nombre']; ?>" style="width: 100px;"></td>

	

					<td  class="input-group-addon"><a href="modificar.php?id=<?php  echo "" .$rows['ci_m'];  ?>&usua=<?php echo "" .$usuario; ?>"><input type="button" name="btn" Value="Modificar" class="btn-primary"></a></td>

			<td  class="input-group-addon"><a href="elimina.php?id=<?php echo "" .$rows['ci_m']; ?>&usua=<?php echo "" .$_GET['usua'] ?>"><input type="button" name="btn" Value="Eliminar" class="btn-primary"></a></td>
</tr>
	
</table>
	</form>

<?php
	}
	?>


		
</section>
	
	

</body>
</html>