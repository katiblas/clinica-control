<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  
    <link rel="stylesheet" href="../reset.min.css">

  <link rel='stylesheet prefetch' href='../font.css'>
<link rel='stylesheet prefetch' href='../font-awesome.min.css'> 

      <link rel="stylesheet" href="../css/style.css">

  
</head>
<script type="text/javascript">

function SoloNumeros(evt){

 if(window.event){//asignamos el valor de la tecla a keynum
  keynum = evt.keyCode; //IE
 }
 else{
  keynum = evt.which; //FF
 } 
 //comprobamos si se encuentra en el rango numérico y que teclas no recibirá.
 if((keynum > 47 && keynum < 58 ) || keynum == 8 || keynum == 13 || keynum == 6 ){
  return true;
 }
 else{
  return false;
 }
}
function sololetras(){
if (event.keyCode >45 && event.keyCode  <57) event.returnValue = false;
}
</script>

<?php
include ("../clase.php");
session_start();
$usuario=$_REQUEST['usua']; //AQUI RECIBIMOS LA VARIABLE usua

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
   <a href="../usuario/lista-usua.php?usua=<?php echo $usuario;?>" class="card " style="color: black; text-decoration: none; margin: 10px;"><label >Usuarios</label></a>
          <a href="../usuario/lista-admin.php?usua=<?php echo $usuario;?>" class="card" style="color: black; text-decoration: none"><label>Administradores</label></a>
      
    </div>
 
<!-- Mixins-->
<!-- Pen Title-->

<div class="pen-title">
  <h1>Ingrese Usuarios </h1><span></a></span>
</div>
<div class="rerun">CLinica Bendito Malestar</div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Registra </h1>
                   <h1 class="pen-title"></h1> 

  


      
    <form action="../usuario/validacionUsu.php?usua=<?php echo $usuario;?>" method="post" name="frm">

      <div class="input-container">

        <div class="bar"></div>

      </div>

      <div class="input-container">

        <div class="bar"></div>
      </div>

      <div class="button-container">

      </div>

      <!--<div class="footer"><a href="#">Forgot your password?</a></div>-->
    </form>
  </div>
  <div class="card alt">
    <div class="toggle"><img src="../css/registro.png" width="40"></div>
    <h1 class="title">Registrar
      <div class="close"></div>
    </h1>

    <form action="../usuario/inser-usua.php?usua=<?php echo $usuario;?>" method="post" name="for">
      <div class="input-container">
        <input type="text" id="#{label}" name="usuario" required="required" maxlength="25" />
        <label for="#{label}">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="#{label}" name="clave" required="required" maxlength="25" />
        <label for="#{label}">Password</label>
        <div class="bar"></div>
      </div>
            <div class="input-container">
        <input type="text" id="#{label}" name="nombre" required="required" maxlength="15" onKeyPress="return sololetras(event);" />
        <label for="#{label}">Nombre</label>
        <div class="bar"></div>
      </div>
        <div class="input-container">
        <input type="text" id="#{label}" name="apellido" required="required" maxlength="20" onKeyPress="return sololetras(event);" />
        <label for="#{label}">Apellido</label>
        <div class="bar"></div>
      </div>
        <div class="input-container">
        <input type="text" id="#{label}" name="cedula" required="required" maxlength="8" onKeyPress="return SoloNumeros(event);" />
        <label for="#{label}">Cedula</label>
        <div class="bar"></div>
      </div>

      <div class="input-container">
       <!-- <input type="text" id="#{label}" name="nivel" required="required" value="usuario" readonly="" />-->
       <select name="nivel" id="#{label}"  style="padding: 20px; width: 100%; font-size: 20px;">
         <option  value="Usuario"  style=" background: #CECEF6;" >Usuario</option>
        <option  value="Administrador" style=" background: #CECEF6;" >Administrador</option>
       </select>
        <label for="#{label}"></label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button name="boton1"><span>Next</span></button>
      </div>
         </form>
  </div>
</div>

 

  <script src='../js1/jquery.min.js'></script>


    <script  src="../js/index.js"></script>




</body>

</html>
