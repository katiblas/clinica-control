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

<body>

  
<!-- Mixins-->
<!-- Pen Title-->
<div class="pen-title">
  <h1>Ingrese al sistema </h1><span>Clinica  bendito Malestar</a></span>
</div>
<div class="rerun">CLinica</div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>
               <h1 class="pen-title">Administrador </h1> 

    <form action="admin.php" method="post" name="frm">
      <div class="input-container">
        <input type="text" id="#{label}" name="usuario" required="required"/>
        <label for="#{label}">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="#{label}" name="clave" required="required"/>
        <label for="#{label}">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button name="boton"><span>Go</span></button>
      </div>
                 <h1 class="pen-title">¿Eres Usuario? <a href="../index.php">login aqui</a> </h1> 


      <!--<div class="footer"><a href="#">Forgot your password?</a></div>-->
    </form>
  </div>
  
  </div>
</div>

 

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


    <script  src="js/index.js"></script>




</body>

</html>
