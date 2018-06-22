<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, user-scalable=no">
<link rel="stylesheet" type="text/css" href="../estilo.css" />
<link rel="stylesheet" type="text/css" href="../css1/bootstrap.min.css" />
      <link rel="stylesheet" href="../css/style.css">

</head>

<title>Enfermedades</title>

</script>
<?php
include ("../clase.php");
include("../conexion.php");

session_start();
$usuario=$_REQUEST['usua'];//AQUI RECIBIMOS LA VARIABLE usua
?>
<script language="javascript">
function sololetras(){
if (event.keyCode >45 && event.keyCode  <57) event.returnValue = false;
}
</script>
<body>
<style type="text/css">
	 .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
</style>
<div class="container-fluid bg-2 ">
	<a href="../usuario/index-admin.php?usua=<?php echo $usuario;?>"><img src="../icon/atras.png" style="width: 40px; margin: 10px; border-radius: 20px;" alt="Bird"></a>
    </div>
    <h2 class="text-primary"><span><img src="../icon/heart.png" style="width: 4%; height: 4%; border-radius: 30px;" alt="bird" >  Ingresar Enfermedades</span></h2>

<form action="../enfermedades/incluirE.php?usua=<?php echo $usuario;?>" method="post">
<table border="0"  class="table" >
<tr>
<td>Enfermedad</td>
<td><input type="text" name="nombre_enf" id="nombre_enf" required onKeyPress="return sololetras(event);"></td>
</tr>
</table>
<center><input type="submit" name="btn" value="siguiente" class="btn-success">
</center>
</form>
</body>
</body>
</html>