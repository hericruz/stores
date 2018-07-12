<?php

	$id = $_GET['id'];
	include ("abrir_conexion.php");	
	$sql = $conexion->query("delete from cliente where codigo_cliente='$id'");	
	
	echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=lista_clientes.php'>";		 

?>