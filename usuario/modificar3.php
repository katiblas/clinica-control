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
<title>Usuarios</title>

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
  <a href="../usuario/usuario.php?usua=<?php echo "" .$usuario1;?>"><img src="../icon/atras.png" style="width: 40px; margin: 10px;" alt="Bird"></a>
    </div>

    <?php
    $consulta=consultar($_GET['usuario']);
 function consultar($usuario1){
$usuario1=$_GET['usuario'];
$id_usu=$_GET['id_usu'];
 $sql1 = "SELECT * FROM usuarios where usuario='".$usuario1."'";
  $RESULT = mysql_query($sql1) or die(msql_error());
  $rows=mysql_fetch_array( $RESULT); 
    

  

 
    ?>
    
        <form action="modificar-listo3.php?id=<?php echo "" .$rows['id_usu'];?>&usua=<?php echo "" .$usuario; ?>" method="get" name="fomr">

    <table border="0"  class="table"  style="color: black; width: 50%;"  >
  <tr>
          <td style="color: black; background: #ccc;">Id</td>

      <td style="color: black; background: #ccc;">Clave</td>
      <td style="color: black;  background: #ccc; ">usuario</td>
    <td style="color: black;  background: #ccc;">nombre</td>
      <td style="color: black;  background: #ccc;">apellido</td>
    <td style="color: black;  background: #ccc;">cedula</td>
        <td style="color: black;  background: #ccc;"></td>
      <?php  
      $usuario=$_REQUEST['usua'];//AQUI RECIBIMOS LA VARIABLE usua
?>
</tr>
<tr>  
  <td><input type="hidden" value="<?php echo "" .$usuario1;?>" name="usua" id="usua"></td>
</tr>
<tr>
  <td class="input-group-addon"><input type="text" name="id_usu" style="width: 60px;" value="<?php echo "" .$rows['id_usu']; ?>" readonly   ></td>

<td  class="input-group-addon"><input type="password" name="clave" style="width: 150px;" value="<?php echo "" .$rows['clave']; ?>"  ></td>
<td class="input-group-addon"><input type="text" name="usuario" style="width: 150px;" value="<?php echo "".$rows['usuario']; ?>"></td>
<td class="input-group-addon"><input type="text" name="nombre" style="width: 150px;" value="<?php echo "".$rows['nombre']; ?>"></td>  
<td class="input-group-addon"><input type="text" name="apellido" style="width: 150px;" value="<?php echo "".$rows['apellido']; ?>"></td>
<td class="input-group-addon"><input type="text" name="cedula" style="width: 150px;" value="<?php echo "".$rows['cedula']; ?>"></td> 
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