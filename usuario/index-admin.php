<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="../js1/jquery.min.js"></script>

  <link rel="stylesheet" href="../css1/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../estilo.css" />
    <link rel="stylesheet" type="text/css" href="../fonts/font.css" />
   <script src="../js1/bootstrap.min.js"></script>
</head>
<title>Menu</title>
<?php
include ("../clase.php");
session_start();
$usuario=$_REQUEST['usua'];//AQUI RECIBIMOS LA VARIABLE usua


?>
<body >
<nav class="navbar navbar-default">

  <div class="container">
    <div class="navbar-header">
<label  class="text-success "><a href="../usuario/usuario2.php?usua=<?php echo $usuario;?>" class="list-group-item active"><img src="../icon/paciente.png" style="width: 30px; border-radius: 5px;"><label>Bienvenido</label>&nbsp;<?php echo "".""."" .$usuario ; ?></a></label><br>
<label><a href="../index.php">Salir</a></label>
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">

      <ul class="nav navbar-nav navbar-right">
        <li><a href="../mujeres/lista-mujeres.php?usua=<?php echo $usuario;?>" ><img src="../icon/mujer.svg" style="width: 20px;">   Mujeres</a</li>
        <li><a href="../hombres/lista-hombres.php?usua=<?php echo $usuario;?>" ><img src="../icon/hombre.svg" style="width: 20px;">Hombres</a></li>
               <li><a href="../consultas/buscar-consulta2.php?usua=<?php echo "".$usuario;?>"><img src="../icon/buscar (2).png" style="width: 20px;"> Buscar Consultas</a></li>

        <li><a href="../analisis/analisi.php?usua=<?php echo $usuario;?>"><img src="../icon/analisis.png" style="width: 20px;">Analisis</a></li>
         <li><a href="../pacientes/historial-p.php?usua=<?php echo "".$usuario;?>"><img src="../icon/newspaper.png" style="width: 20px;"> Historiales </a></li>

      </ul>

    </div>
  </div>
</nav>

<div class="container-fluid bg-1 text-center">
  <br>
  <article class="col-xs-3  text-left" >
   <ul class="nav">
<li><a href="../medicos/medico.php?usua=<?php echo $usuario;?>" ><img src="../icon/medico.svg" style="width: 20px; "> Medicos</a></li>
    <li> <a href="../especialidad/especialidades.php?usua=<?php echo $usuario;?>"><img src="../icon/laboratorio.png" style="width: 23px;">Especialidades</a></li>
        <li ><a href="../enfermedades/enfermedad.php?usua=<?php echo $usuario;?>" ><img src="../icon/heart.png" style="width: 20px;">Enfermedades</a></li>
        <li> <a href="../gestiones/gestion-usu.php?usua=<?php echo $usuario;?>"><img src="../icon/cog.png" style="width: 16px;">Usuarios</a></li>
      </ul>
      </article></br>


</div>
<hr>
<center>
<div class="container-fluid bg-3 text-left">


</div>
<div class="list-group">

<ul  class="nav" style="width: 30%;">
<li><a href="../pacientes/paciente.php?usua=<?php echo "".$usuario;?>" class="list-group-item active" ><img src="../icon/medico.svg" style="width: 30px; border-radius: 5px;">   INGRESAR</a></li>  

</ul></center>

<article class="col-xs-pull-11 ">
  <div class="container-fluid bg-2 text-center">
  <h3>Ya esta registrado?</h3>
  <p>Ve al medico </p>
  <a href="../consultas/consulta2.php?usua=<?php echo "".$usuario;?>" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-search"></span>Medico</a>
</div>
</article>

</body>
</html>