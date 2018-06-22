<?php

//--------------------------------------------------------------------
//       Clase control
//--------------------------------------------------------------------
  class control
  { 
	var $conexion;
//--------------------------------------------------------------------
//       Función Abrir conexión 
//--------------------------------------------------------------------
  function abrir_bd() 
  {
   $this->conexion = @mysql_connect("localhost","root","12345678");
   if($this->conexion>0 && mysql_select_db ("clinica_bd", $this-> conexion))
    return true;
   else  
	{
      return false;
	}	
	  
  }
//--------------------------------------------------------------------
//       Función ejecutar SQL 
//--------------------------------------------------------------------
  function ejecutar_sql($instruccion) 
  {
    return mysql_query($instruccion,$this->conexion);
  }
//--------------------------------------------------------------------
//       Proxima fila
//--------------------------------------------------------------------
  function proximafila($cursor) 
  {
    return mysql_fetch_array($cursor);
  }
//--------------------------------------------------------------------
//       Función cerrar conexión 
//--------------------------------------------------------------------
  function cerrar_bd() 
  {
    @mysql_close($this->conexion);
  } 
  
}//Fin de la clase control
 class paciente
  { 
	var $ci_p;
	var $nombre;
	var $apellido;
	var $edad;
	var $direccion;
	var $sexo;
     var $cod_enf;
  
  function setCi_p($ci_p)
	{
	   $this->ci_p = $ci_p;
	}

function setNombre($nombre)
	{
	   $this->nombre = $nombre;
	}

function setApellido($apellido)
	{
	   $this->apellido = $apellido;
	}

	function setEdad($edad)
	{
	   $this->edad = $edad;
	}
	function setDireccion($direccion)
	{
	   $this->direccion = $direccion;
	}
	function setSexo($sexo)
	{
	   $this->sexo = $sexo;
	}
  	function setCod_enf($cod_enf)
	{
	   $this->cod_enf = $cod_enf;
	}

	function incluir()
	{
		$bd   = new control;
		if (!$bd->abrir_bd())
		    return 0;
		else
		{
		 $sql= " INSERT INTO `paciente` (`ci_p`, `nombre`, `apellido`, `edad`, `direccion`, `sexo`, `cod_enf`) values
					    ('$this->ci_p' , '$this->nombre' , '$this->apellido','$this->edad','$this->direccion','$this->sexo','$this->cod_enf') ";
		
		$cursor = $bd->ejecutar_sql($sql);
		 
		 $bd->cerrar_bd();
		 if ($cursor>0)
		       return ($cursor);
			else
			   return 0;
		}  
		}

	function listado()
	{
	  $bd       = new control;
 	  if(!$bd->abrir_bd())
	    return -1;

		$sql  = "SELECT 'paciente'.'ci_p' , 'paciente'.'nombre' , 'paciente'.'apellido' , 'paciente'.'edad' ,'paciente'.'direccion'  FROM paciente where sexo='Femenino' 

		";
		$cursor   = $bd->ejecutar_sql($sql);
		$contador = 0;

	  	if ($row = $bd->proximafila($cursor))
	  	{
			DO
			{
			   $filas [$contador][1] =  $row["ci_p"];
			   $filas [$contador][2] = $row["nombre"];
			   $filas [$contador][3] = $row["apellido"];
			   	$filas [$contador][4] = $row["edad"];
			   	$filas [$contador][5] = $row["direccion"];
echo  
			   $contador++;
			}
			WHILE ($row = $bd->proximafila($cursor));
	 	  }
	  	$bd->cerrar_bd();
	   return $filas;
	}
}

/**
* 
*/
class especialidad
{
	var $cod_esp;
	var $nombre;

	function  setCod_esp($cod_esp)
	{
		$this->cod_esp=$cod_esp;
	}
	function  setNombre($nombre)
	{
		$this->nombre=$nombre;
	}
	function incluirES()
	{
		$bd=new control;
		if (!$bd->abrir_bd())
			return 0;

		else {

			$sql=" insert into especialidad  ( `cod_esp`,
		 `nombre`) values ( '$this->cod_esp',
					    '$this->nombre' ) 
					    ";
					    $cursor = $bd->ejecutar_sql($sql);
		 
		 $bd->cerrar_bd();
		 if ($cursor>0)
		       return ($cursor);
			else
			   return 0;

	}
}
}

/**
* 
*/
class medico  
{
	var $ci_m;
	var $nombre_m;
	var $apellido;
	var $cod_esp;
	
	function setCi_m($ci_m)
	{
	 $this->ci_m=$ci_m;

	}
	function setNombre_m($nombre_m)
	{
		$this->nombre_m=$nombre_m;
	}
	function setApellido($apellido)
	{
		$this->apellido=$apellido;
	}
	function setCod_esp($cod_esp)
	{
		$this->cod_esp=$cod_esp;
	}

	


	function incluirM()
	{
		$bd=new control;
		if (!$bd->abrir_bd())
			return 0;

		else {

			$sql=" insert into medicos  ( `ci_m` , `nombre_m`, `apellido` , `cod_esp`) values ('$this->ci_m','$this->nombre_m','$this->apellido',
			'$this->cod_esp') ";
			$cursor = $bd->ejecutar_sql($sql);
		 
		 $bd->cerrar_bd();
		 if ($cursor>0)
		       return ($cursor);
			else
			   return 0;



		}

	}
}
	/**
	* 
	*/
	class enfermedad 
	{
	var $Cod_enf;
	var $nombre_enf;

		
		
function setCod_enf($cod_enf)
{
	$this->cod_enf=$cod_enf;
}
function setNombre_enf($nombre_enf)
{
	$this->nombre_enf=$nombre_enf;
}

    function incluirE()
	{
		$bd=new control;
		if (!$bd->abrir_bd())
			return 0;

		else {

			$sql=" insert into enfermedades  ( `Cod_enf`,
		 `nombre_enf`) values ( '$this->Cod_enf',
					    '$this->nombre_enf')
					    ";
					    $cursor = $bd->ejecutar_sql($sql);
		 
		 $bd->cerrar_bd();
		 if ($cursor>0)
		       return ($cursor);
			else
			   return 0;

	}
}
}

class consulta
{
	var $cod_c;
	var $fecha;
	var $diagnostico;
	var $tratamiento;
	var $ci_m;
	var $ci_p;

	function  setCod_c($cod_c)
	{
		$this->cod_c=$cod_c;
	}
	function  setFecha($fecha)
	{
		$this->fecha=$fecha;
	}
	function  setDiagnostico($diagnostico)
	{
		$this->diagnostico=$diagnostico;
	}
	function  setTratamiento($tratamiento)
	{
		$this->tratamiento=$tratamiento;
	}
	function  setCi_m($ci_m)
	{
		$this->ci_m=$ci_m;
	}
	function setCi_p($ci_p)
	{
		$this->ci_p=$ci_p;
	}

	 function incluirC()
	{
		$bd=new control;
		if (!$bd->abrir_bd())
			return 0;

		else {

			$sql=" insert into consultas  ( `cod_c`,
		 `fecha`,
		 `diagnostico`,
		 `tratamiento`,`ci_m`, `ci_p`) values ( '$this->cod_c',
					    '$this->fecha',
					    '$this->diagnostico',
					    '$this->tratamiento', '$this->ci_m','$this->ci_p')
					    ";
					    $cursor = $bd->ejecutar_sql($sql);
		 
		 $bd->cerrar_bd();
		 if ($cursor>0)
		       return ($cursor);
			else
			   return 0;

	}
}
}
/////////////////////
class analisis
{
	var $num_a;
	var $fecha;

	function setNum_a($num_a)
	{
		$this->num_a=$num_a;
	}
	function setFecha($fecha)
	{
		$this->fecha=$fecha;
	}
	function incluirA()
	{
		$bd=new control;
		if (!$bd->abrir_bd())
			return 0;

		else {

			$sql=" insert into analisis  ( `num_a`,
		 `fecha`) values ( '$this->num_a','$this->fecha') ";
					    $cursor = $bd->ejecutar_sql($sql);
		 
		 $bd->cerrar_bd();
		 if ($cursor>0)
		       return ($cursor);
			else
			   return 0;

	}
}
}
class registro
{
	var $cod_r;
	var $descripcion;
	var $ci_p;
	var $num_a;



     function setCod_r($cod_r)
	{
		$this->cod_r=$cod_r;
	}
	function setDescripcion($descripcion)
	{
		$this->descripcion=$descripcion;
	}
	function setCi_p($ci_p)
	{
		$this->ci_p=$ci_p;
	}

	function setNum_a($num_a)
	{
		$this->num_a=$num_a;
	}
	function incluirR()
	{
		$bd=new control;
		if (!$bd->abrir_bd())

			return 0;

		else {


			$sql=" insert into registro  ( `cod_r`,
		 `descripcion`,`ci_p`,`num_a`) values ( '$this->cod_r',
					    '$this->descripcion',
					    '$this->ci_p',
					    '$this->num_a') ";
					    $cursor = $bd->ejecutar_sql($sql);
		 
		 $bd->cerrar_bd();

		 if ($cursor>0)

		       return ($cursor);

			else

			   return 0;

	}
}
}
////////////////////////
/**
* 
*/


class usuario
{

var $usuario;
var $clave;
var $nombre;
var $apellido;
var $cedula;
var $nivel;

	function setUsuario($usuario)
	{
          $this->usuario=$usuario;	
      }
	
    function setClave($clave)
	{
          $this->clave=$clave;	
      }
      function setNombre($nombre)
	{
          $this->nombre=$nombre;	
      }
         function setApellido($apellido)
	{
          $this->apellido=$apellido;	
      }
           function setCedula($cedula)
	{
          $this->cedula=$cedula;	
      }
      function setNivel($nivel)
	{
          $this->nivel=$nivel;	
    }
    function incluirUsu()

{
		$bd=new control;
		if (!$bd->abrir_bd())
			return 0;

		else {

			$sql=" INSERT INTO usuarios  ( `usuario`, `clave`,`nombre`,`apellido`,`cedula`,`nivel`) VALUES ('$this->usuario','$this->clave', '$this->nombre','$this->apellido','$this->cedula', '$this->nivel') ";
					    $cursor = $bd->ejecutar_sql($sql);
		 
			 
		 $bd->cerrar_bd();
		 if ($cursor>0)
		       return ($cursor);
			else
			   return 0;

	}
    }
}
    