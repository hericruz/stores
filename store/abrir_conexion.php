<?php 
	// Parametros a configurar para la conexion de la base de datos 
	/*$host = "sql107.elmejorhosting.online";    // sera el valor de nuestra BD 
	$basededatos = "lmj_22347091_store";    // sera el valor de nuestra BD 
	$usuariodb = "lmj_22347091";    // sera el valor de nuestra BD 
	$clavedb = "Can16031";    // sera el valor de nuestra BD */

	$host = "sql9.freesqldatabase.com:3306";    // sera el valor de nuestra BD 
	$basededatos = "sql9247393";    // sera el valor de nuestra BD 
	$usuariodb = "sql9247393";    // sera el valor de nuestra BD 
	$clavedb = "eyM8VvRxwW";  

	//Lista de Tablas
	$tabla_db1 = "cliente"; 	   // tabla de usuarios
	$tabla_db2 = "productos"; 
	$tabla_db3 = "reparaciones"; 
    $tabla_db4 = "usuario";

	error_reporting(0); //No me muestra errores
	
	$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);


	if ($conexion->connect_errno) {
	    echo "Nuestro sitio experimenta fallos....";
	    exit();
	}

?>