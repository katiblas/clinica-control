 <?php 
    include("../../conexion.php");
    include("../../clase.php");

 session_start();

$usuario=$_REQUEST['usua'];
    $ci_p=$_GET['ci_p'];

    $sql=mysql_query("SELECT p.ci_p, p.nombre, p.apellido, p.edad, p.direccion, p.sexo, p.cod_enf ,r.descripcion FROM paciente p inner join registro r WHERE p.ci_p='".$ci_p."' ");


    while($rows=mysql_fetch_array($sql)) {
       $nombre=$rows['nombre'];//Tomamos los valores d
        $apellido=$rows['apellido'];
        $edad=$rows['edad'];
       $direccion=$rows['direccion'];
       $sexo=$rows['sexo'];
              $cod_enf=$rows['cod_enf'];
              $descripcion=$rows['descripcion'];
    if ($ci_p=$rows['ci_p']){
         $ci=$rows['ci_p']; 

    header("location:../pacientes/historial-p.php?ci=$ci&usua=$usuario&nom=$nombre&ape=$apellido&edad=$edad&direc=$direccion&sexo=$sexo&cod_enf=$cod_enf&des=$descripcion"); //ENVIAMOS EL VALOR DE LA CEDULA QUE SE ENCONTRO
      } 
}
      echo"<script type='text/javascript'>

      alert('No se ah Registrado ')
       </script>";
       echo"<script>window.location.replace('../pacientes/historial-p.php?usua=$usuario');
		</script>";


    ?>