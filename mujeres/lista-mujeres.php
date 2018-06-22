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
<title>Mujeres</title>


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
	<a href="../usuario/index-admin.php?usua=<?php echo $usuario;?>"><img src="../icon/atras.png" style="width: 40px; margin: 10px;" alt="Bird"></a>
    </div>
<section>

	<form action="../reporte/reporte-mujer.php?usua=<?php echo $usuario;?>" method="post" name="frm">

	
<table border="0"  class="table" >
	<?php 
     include("../conexion.php");

$result = mysql_query("SELECT p.ci_p,p.nombre,p.cod_enf,p.apellido,p.edad,p.direccion,p.sexo,e.nombre_enf as nombre_enf from paciente p INNER JOIN enfermedades e where p.cod_enf=e.cod_enf and sexo='Femenino'" ) ; 
if ($row = mysql_fetch_array($result)){ 
echo "<tr><td><strong>Cedula</strong></td><td><strong>Nombre</strong></td><td><strong>Apellido</strong></td><td><strong>Edad</strong></td><td><strong>Direccion</strong></td><td><strong>sexo</strong></td><td><strong>enfermedad</strong></td></tr> "; 
do { 
echo "<tr><td>".$row['ci_p']."</td><td>".$row['nombre']."</td><td>".$row['apellido']."</td><td>".$row['edad']."</td><td>".$row['direccion']."</td><td>".$row['sexo']."</td><td>".$row['nombre_enf']."</td></tr> "; 
} while ($row = mysql_fetch_array($result)); 
echo "</table> "; 
} else { 
echo "Texto si no se encuentran resultados"; 
} 
?> 
</table>
<center>
  <a href="reportes/index.php" target="_bank">
<input type="submit" name="btn" value="Generar Reporte" class="btn" style="background: #E33510; color: white;"></a>
</center>



	</form>
		
</section>
	
	

	

</body>

   </head>
   </html>