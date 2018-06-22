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
<title>Buscar</title>
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
 

</ul>
<form >

    <table border="0" class="table">
<tr><td>
    Fecha Inicial: <br/></td>
    <td><input type="date" id="start_date" name="start_date" value="" placeholder="mm/dd/yyyy"><br> </td>
</tr>
    <tr>
        <td>
    Fecha final:<br/><td>
    <input type="date" id="end_date" name="end_date" value="" placeholder="mm/dd/yyyy" ></td>
        <input type="hidden" id="usua" name="usua" value="<?php echo "" .$usuario;?>" ></td>

    </tr>
    <tr>
        <td>
             </td>

    
   <td><a href="<?php echo  "" .$usuario;?>"><input type="submit" id="btn_submit" name="btn1" value="Buscar" class="btn-success"></a></td>
</tr>
    </table>
</form>


<hr>

<?php if (isset($_GET['btn1']) && $_GET['btn1'] == "Buscar") {?>


<?php
include("../conexion.php");
 session_start();

$usuario=$_REQUEST['usua'];

    $SDATE = $_GET['start_date'];
    $SSDATE = explode('/', $SDATE);
    $START_DATE = $SSDATE[0]."-".$SSDATE[1]."-".$SSDATE[2];
   //echo('<h3>'.$START_DATE.'</h3>');
    
    $EDATE = $_GET['end_date'];
    $EEDATE = explode('/', $EDATE);
    $END_DATE = $EEDATE[0]."-".$EEDATE[1]."-".$EEDATE[2];
    //echo('<h3>'.$END_DATE.'</h3>');
    
    
    //SELECT * FROM test WHERE course_date BETWEEN '2015-01-09' AND '2015-10-01'
    
  $strsql = "SELECT a.num_a, a.fecha,r.num_a,r.cod_r,r.descripcion, r.ci_p,p.nombre  FROM analisis a inner join registro r inner join paciente p  WHERE fecha BETWEEN  '$START_DATE' AND '$END_DATE' and r.num_a=a.num_a and p.ci_p=r.ci_p";
  $rs = mysql_query($strsql) or die(mysql_error());
  $row = mysql_fetch_assoc($rs);
  $total_rows = mysql_num_rows($rs);
  //print_r($row);
?>


<table width="500" border="0" cellspacing="0" cellpadding="2" class="table">
    <tr class="h3">
        <td>Id</td>
        <td>Descripcion</td>
        <td>Paciente</td>
        <td>Analisis</td>

    </tr>

<?php if ($total_rows > 0) {
        do {

?>
    <tr>
        <td><?php echo($row['cod_r']); ?></td>
        <td><?php echo($row['descripcion']); ?></td>
        <td><?php echo($row['nombre']); ?></td>
        <td><?php echo($row['fecha']); ?></td>



    </tr>
<?php
        } while ( $row = mysql_fetch_assoc($rs) );
        mysql_free_result($rs);
    } else {
?>
    <tr>
        <td colspan="3" class="h4" style="background: #ccc;">La fecha no existe.</td>
    </tr>

<?php } ?>
</table>
<?php } ?>
<center>
  <a href="../reporte/reporte-analisis.php?usua=<?php echo "" .$usuario;?>&ini=<?php echo "" .$START_DATE;?>&fina=<?php echo "" .$END_DATE;?> " target="_blank">
<input type="submit" name="btn" value= "Generar Reporte" class="btn" style="background: #E33510; color: white;"></a>
</center>

</body>
</html>