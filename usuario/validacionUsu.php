<?php



if(isset($_POST['boton'])){


include "../conexion.php";
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$nivel=$_POST['nivel'];
$sql=mysql_query("select usuario, clave , nivel from usuarios where nivel='usuario'");
while($consulta=mysql_fetch_array($sql)){

echo "<br>";
if($usuario==$consulta['usuario'] && $clave==$consulta['clave'] && $nivel=$consulta['nivel']){
header("Location: ../menu-usua/index.php?usua=$usuario");

echo "esta registrado" ;
session_start();

}


else 
if($usuario!=$consulta['usuario'] && $clave!=$consulta['clave']){

$a=1;

}
}
if ($a>0) {echo"<script>alert('Lo siento no esta Registrado ,Debe estar Registrado para poder acceder.')</script>";
}
echo '
        <script type="text/javascript">
	
			window.location="../index.php";
        </script>';


	mysql_close($mysql);

}



?>