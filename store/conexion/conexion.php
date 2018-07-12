<?php
	$server="localhost";
	$username="root";
	$password="";
	$db="store";
	$conexion=mysqli_connect($server,$username,$password)or die("conexion existosa");
	$dbs=mysqli_select_db($conexion,$db)or die("base de datos no existente");
?>