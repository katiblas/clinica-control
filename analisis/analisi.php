<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" href="../js1/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" href="../css1/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="estilo.css" />
  <link rel="stylesheet" type="text/css" href="../fonts/font.css" />
  <link rel="stylesheet" href="../css/style.css">
  <script src="js/bootstrap.min.js"></script>
</head>
<title>Laboratorio</title>
<?php
include ("../clase.php");
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
<a href="buscar-analisis.php?usua=<?php echo $usuario;?>"><input type="submit" name="btn" id="btn" value="Buscar Analisis" class="btn-primary " style="width: 15%; height: 50px;"></a>
    </div>
<section>
	
<form action="incluirA.php?usua=<?php echo $usuario; ?>" method="post" name="frm">
	<?php
 $rand = range(1, 40); 
shuffle($rand); 
foreach ($rand as $id) { 
}
$caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$caracteres .= "1234567890";
$final = array();
$longitud = 10;
$carac_desordenada = str_shuffle($caracteres);
for($i=0;$i<=$longitud;$i++) {
$final[$i] = $carac_desordenada[$i]; }
//recorremos la array e imprimimos
foreach($final as $datos) {
 }
?>


<table border="0"  class="table" >	
	<tr>
		<td>Codigo del analisis</td>
		<td><input type="text" name="num_a" id="num_a" readonly required placeholder="Ejm:Exam1001, 8 caracteres" value="<?php echo "".$id. "-Examen".$datos; ?>" >
	</td>
	</tr>

	<tr>
		<td>fecha</td>
		<td><input type="date" name="fecha" id="fecha" required></td>
	</tr>
</table>
<center>
<input type="submit" name="btn" id="btn" value="Siguiente" class="btn-success">
</center>
</form>

</body>
</html>