<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" href="../../js1/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" href="../../css1/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../estilo.css" />
    <link rel="stylesheet" type="text/css" href="../../fonts/font.css" />
   <script src="js/bootstrap.min.js"></script>
</head>
<title>Historiales</title>
<body>
  <style type="text/css">
   .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
</style>
  <?php 
  include("../../conexion.php");
   $ci_p=$_GET['ci'];///ENVIAMOS LOS VALORES PARA MOSTRARLOS
  $nombre=$_GET['nom'];
   $apellido=$_GET['ape'];
  $edad=$_GET['edad'];
   $direccion=$_GET['direc'];
   $sexo=$_GET['sexo'];
    $cod_enf=$_GET['cod_enf'];
       $descripcion=$_GET['des'];


  session_start();
$usuario=$_REQUEST['usua'];

?>
<div class="container-fluid bg-2 ">
  <a href="../index.php?usua=<?php echo  "".$usuario; ?>"><img src="../../icon/atras.png" style="width: 40px; margin: 10px;" alt="Bird"></a>
    </div>
<section>
  <form action="../pacientes/buscar-paciente3.php?usua=<?php echo "".$usuario; ?>" method="get" >

        <br><center>
          <input type="hidden" value="<?php echo "".$usuario; ?>" name="usua">
<tr><td ><h4 class="glyphicon-asterisk">Ingrese Cedula del Paciente</h4></td></tr>
<div class="container-fluid bg-success ">


<input type="text" name="ci_p" id="ci_p" class="" >
<input type="submit" id="btn-buscar" name="btn-buscar" value="Buscar" class="btn-success" >
</div>
</center>

</table>
<?php
include("../../conexion.php");

session_start();
$usuario=$_REQUEST['usua'];//AQUI RECIBIMOS LA VARIABLE usua

?>

    </form>
<?php if ($ci_p > 0) {


?>
<div class="pager">
    <table border="0"  class="table"  style="color: black; width: 30%;"  >
  <tr>
  <td class="btn-success" ><h4> Paciente</h4></td>
</tr>


<tr>
  <td>Cedula</td>
<td><input type="text" value="<?php echo "" .$ci_p; ?>" id="ci_p" name="ci_p" readonly></td>
</tr>
<tr>
    <td>Nombre</td>
<td><input type="text" value="<?php echo "" .$nombre; ?>" id="nombre" name="nombre" readonly></td>
</tr>
<tr>
    <td>Apellido</td>
<td><input type="text" value="<?php echo "" .$apellido; ?>" id="apellido" name="apellido" readonly></td>
</tr>
<tr>
    <td>Edad</td>

<td><input type="text" value="<?php echo "" .$edad; ?>" id="edad" name="edad" readonly></td>
</tr>
<tr>
    <td>Direccion</td>

<td><input type="text" value="<?php echo "" .$direccion; ?>" id="direccion" name="direccion" readonly></td>
</tr>
<tr>
    <td>Sexo</td>

<td><input type="text" value="<?php echo "" .$sexo; ?>" id="sexo" name="sexo" readonly></td>
</tr>
<tr>
    <td>Enfermedad</td>
<td><input type="text" value="<?php echo "" .$cod_enf; ?>" id="cod_enf" name="cod_enf" readonly></td>
</tr>



</table>


</div>

    
    <table border="0"  class="table"  style="color: black; width: 30%;"  >
  <tr>
  <td class="btn-success" ><h4 > Examenes</h4></td>
</tr>
   <?php 
 $sql=mysql_query("SELECT r.descripcion, r.num_a,a.fecha,r.ci_p from registro r inner join analisis a WHERE r.ci_p='".$ci_p."' and a.num_a=r.num_a  ");
 while($rows=mysql_fetch_array($sql)) {
    ?>
    <tr>
  <td class="input-group-addon">Id</td>
<td><input type="text" value="<?php echo "" .$rows['num_a']; ?>" id="num_a" name="num_a" readonly></td>
</tr>
<tr>
  <td >Descripcion</td>

<td ><input type="text" value="<?php echo "" .$rows['descripcion']; ?>" id="descripcion" name="descripcion" readonly></td>
</tr>
<tr>
  <td class="">Fecha</td>

<td ><input type="text" value="<?php echo "" .$rows['fecha']; ?>" id="descripcion" name="descripcion" readonly></td>
</tr>

<?php
}
?>
</table>


<div  >
<table border="0"  class="table"  style="color: black; width: 30%;"  >
  <tr>
  <td class="btn-success" ><h4> Consultas</h4></td>
</tr>
 <?php 
 $sql=mysql_query("SELECT * FROM consultas WHERE ci_p='".$ci_p."'");
 while($rows=mysql_fetch_array($sql)) {
  

    ?>
    
        <tr>
          <td class="input-group-addon">Fecha</td>
<td class="input-group-addon"><input type="text" value="<?php echo "" .$rows['fecha']; ?>" id="descripcion" name="descripcion" readonly></td>
</tr>
<tr>
  <td>Diagnostico</td>
<td><input type="text" value="<?php echo "" .$rows['diagnostico']; ?>" id="descripcion" name="descripcion" readonly ></td>
</tr>
<tr>
    <td>Tratamiento</td>

<td><input type="text" value="<?php echo "" .$rows['tratamiento']; ?>" id="descripcion" name="descripcion" readonly ></td>
</tr>
<tr>
    <td>Medico</td>

<td><input type="text" value="<?php echo "" .$rows['ci_m']; ?>" id="descripcion" name="descripcion" readonly></td>
</tr>
</tr>
 <?php
  }?>
</table>
   
<?php
    } 
?>

  </div>
  </body>
  </html>
