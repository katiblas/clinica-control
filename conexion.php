<?php
$hostname='localhost';
$database='clinica_bd';
$username='root';
$password='12345678';
error_reporting(0);
$mysql= mysql_connect($hostname,$username,$password,$database);
$db=mysql_select_db($database);
return ($mysql);
return($db);

//if($mysql)
//echo "se conecto";
//else 
//echo "no conecto";


?>