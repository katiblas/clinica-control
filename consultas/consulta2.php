<!DOCTYPE html >
<head>
<meta  charset="utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="../js1/jquery.min.js"></script>
  <link rel="stylesheet" href="../css1/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../fonts/font.css" />
   <script src="../js1/bootstrap.min.js"></script>
   <link rel="stylesheet" href="../css/style.css">

</head>
<title>Consultas</title>
<?php
include("../clase.php");
  session_start();

$usuario=$_REQUEST['usua'];
?>
<body>
<style type="text/css">
	 .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
</style>
<div class="container-fluid bg-2 ">
	<a href="../usuario/index-admin.php?usua=<?php echo "".$usuario; ?>"><img src="../icon/atras.png" style="width: 40px; margin: 10px;" alt="Bird"></a>
    </div>

<?php 
  include("../conexion.php");
    $ci_p=$_GET['ci'];
  session_start();

$usuario=$_REQUEST['usua'];

?>

    <form action="../pacientes/buscar-paciente.php?usua=<?php echo "".$usuario; ?>" method="get" >

        <br><center>
          <input type="hidden" value="<?php echo "".$usuario; ?>" name="usua">
<tr><td ><h4 class="glyphicon-asterisk">Ingrese Cedula del Paciente</h4></td></tr>
<div class="container-fluid bg-success ">


<input type="text" name="ci_p" id="ci_p" class="" >
<input type="submit" id="btn-buscar" name="btn-buscar" value="Buscar" class="btn-success" >
</div>
</center>

</table>


    </form>


<form action="incluir.php?usua=<?php echo "".$usuario; ?>" method="post">
<table border="0"  class="table" >
<tr>
<td>Fecha</td>
<td><input type="date" name="fecha"  required id="fecha"></td>
</tr>
<tr>
<td>Diagnostico</td>
<td><input type="text" name="diagnostico" id="diagnostico"  required></td>
</tr>
<tr>
<tr>
<td>Tratamiento</td>
<td><input type="text" name="tratamiento" id="tratamiento"  required></td>
</tr>
<tr>
<td>Medicos</td>
<td><select  id="ci_m" name="ci_m" class="input-sm"  required>
  <option value="" >Elige...
  <?php 
  include("../conexion.php");

     $paciente=$_REQUEST['cedu'];//AQUI RECIBIMOS LA VARIABLE CEDU
      $sql=mysql_query("SELECT T5.ci_m,T5.nombre_m, T5.apellido, T5.cod_esp, T10.nombre as nombre 
FROM medicos T5 INNER JOIN especialidad T10 ON T5.cod_esp = T10.cod_esp");
  while($consulta=mysql_fetch_array($sql))
{  echo '<option value='.$consulta['ci_m'].'> '.$consulta['nombre_m'].'> '.$consulta['nombre'].' </option>'; }?> 
  </option>
</select></td>
</tr>
</option>
</select></td>
</tr>
     
<tr>
<td>Paciente</td>
<td><input type="text" value="<?php echo "" .$ci_p; ?>" id="ci_p" name="ci_p"></td>
</tr>
</table>
<center><input type="submit" name="btn" value="siguiente" class="btn-success">
</center>
</form>
</body>
</html>