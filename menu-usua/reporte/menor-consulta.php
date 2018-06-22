<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link rel="stylesheet" href="../../css1/bootstrap.min.css">
  <link rel="stylesheet" type="/text/css" href="../estilo.css" />
    <link rel="stylesheet" type="text/css" href="../../fonts/font.css" />

   <script src="../../js1/bootstrap.min.js"></script>
   </head>

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
<table border="0"  class="table" >
	<?php 
     include("../../conexion.php");
     //date_default_timezone_set('UTC');
 $dia=date("d");
$result = mysql_query("SELECT T5.fecha,T5.diagnostico, T5.tratamiento, T5.ci_m,T5.ci_p, T10.nombre_m as nombre_m,nombre FROM consultas T5 INNER JOIN medicos T10 ON T5.ci_m = T10.ci_m and fecha<=CURDATE()  INNER JOIN paciente T11 ON T5.ci_p = T11.ci_p ");

if ($row = mysql_fetch_array($result)){ 
echo "<tr><td><strong>fecha</strong></td><td><strong>diagnostico</strong></td><td><strong>Tratamiento</strong></td><td><strong>Medico</strong></td><td><strong>Paciente</strong></td></tr> "; 
do { 
echo "<tr><td>".$row['fecha']."</td><td>".$row['diagnostico']."</td><td>".$row['tratamiento']."</td><td>".$row['nombre_m']."</td><td>".$row['nombre']."</td><td> "; 
} while ($row = mysql_fetch_array($result)); 
echo "</table> "; 
} else { 
echo "Texto si no se encuentran resultados"; 
}
?> 
</table>
<center>
  <a href="reporte-consulta-P.php?usua=<?php echo $usuario;?>">
<input type="submit" name="btn" value="Generar Reporte" class="btn-success"></a>
</center>

</body>
</html>