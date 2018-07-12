<?php

	$id = $_GET['id'];
	include ("abrir_conexion.php");	
	$sql = $conexion->query("delete from productos where codigo='$id'");	
	
	echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=lista_productos.php'>";		 

?>