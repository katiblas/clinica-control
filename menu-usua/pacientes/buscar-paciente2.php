 <?php 
    include("../../conexion.php");
    include("../../clase.php");

 session_start();

$usuario=$_REQUEST['usua'];
  $ci_Buscar=$_POST['ci_Buscar'];
    $sql=mysql_query("SELECT ci_p,nombre FROM paciente WHERE ci_p='".$ci_Buscar."'");
    while($rows=mysql_fetch_array($sql)) {
         if ($ci_Buscar=$rows['ci_p']){
         $ci=$rows['ci_p']; 
    header("location:../registros/registro.php?ci=$ci&usua=$usuario"); //ENVIAMOS EL VALOR DE LA CEDULA QUE SE ENCONTRO
      } 
}
      echo"<script type='text/javascript'>

      alert('No se ah Registrado')
       </script>";
       echo"<script>window.location.replace('../registros/registro.php?usua=$usuario');
		</script>";


    ?>