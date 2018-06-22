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
<script language="javascript">
function sololetras(){
if (event.keyCode >45 && event.keyCode  <57) event.returnValue = false;
}
</script>
<?php
include ("../clase.php");
include("../conexion.php");

session_start();
$usuario=$_REQUEST['usua'];//AQUI RECIBIMOS LA VARIABLE usua
$usuario1=$_GET['usuario'];
?>
<body>
<style type="text/css">
	 .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
</style>
<div class="container-fluid bg-2 ">
  <a href="../medicos/lista-medicos.php?usua=<?php echo "" .$usuario;?>"><img src="../icon/atras.png" style="width: 40px; margin: 10px;" alt="Bird"></a>
    </div>

    <?php
    $consulta=consultar($_GET['ci_m']);
 function consultar($ci_m){
$usuario1=$_GET['id'];
$ci_m=$_GET['ci_m'];
 //$sql1 = "SELECT * FROM medicos where ci_m='".$usuario1."'";
 $sql1="SELECT m.ci_m,m.nombre_m,m.apellido,m.cod_esp,e.nombre as nombre FROM medicos m inner join  especialidad e on  m.cod_esp=e.cod_esp where ci_m='".$usuario1."'";
  $RESULT = mysql_query($sql1) or die(msql_error());
  $rows=mysql_fetch_array( $RESULT); 
    

  

 
    ?>
    
        <form action="modificar-listo.php?id=<?php echo "" .$rows['ci_m'];?>&usua=<?php echo "" .$usuario; ?>" method="get" name="fomr">

    <table border="0"  class="table"  style="color: black; width: 50%;"  >
  <tr>
      <td style="color: black; background: #ccc;">Cedula</td>
      <td style="color: black;  background: #ccc; ">Nombre</td>
    <td style="color: black;  background: #ccc;">Apellido</td>
      <td style="color: black;  background: #ccc;">Especialidad</td>
        <td style="color: black;  background: #ccc;"></td>
      <?php  
      $usuario=$_REQUEST['usua'];//AQUI RECIBIMOS LA VARIABLE usua
?>
</tr>
<tr>  
  <td><input type="hidden" value="<?php echo "" .$usuario;?>" name="usua" id="usua"></td>
</tr>
<tr>
  <td class="input-group-addon"><input type="text" name="ci_m"  style="width: 70px;" value="<?php echo "" .$rows['ci_m']; ?>" readonly   ></td>

<td  class="input-group-addon"><input type="text" name="nombre_m" maxlength="15" style="width: 150px;" value="<?php echo "" .$rows['nombre_m']; ?>" onKeyPress="return sololetras(event);"  ></td>
<td class="input-group-addon"><input type="text" name="apellido" maxlength="20" style="width: 150px;" value="<?php echo "".$rows['apellido']; ?>" onKeyPress="return sololetras(event);"></td>
<td class="input-group-addon"><input type="text" name="cod_esp" style="width: 150px;" value="<?php echo "".$rows['nombre']; ?>" readonly></td>  


<td class="input-group-addon"><input type="submit" value="Guardar" name="btn" class="btn-primary">
</td>
</tr>
</table>
</form>
<?php 
}
?>

</body>
</html>