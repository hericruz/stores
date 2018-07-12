<?php 
	include('abrir_conexion.php');
	
	$id=$_GET['id'];

	$sql = "Delete FROM tabla_db1 WHERE codigo_cliente = '$id' ";
	$result = mysql_query($conexion, $sql);


?>

<html>
	<head>
		<title>Delete</title>
	</head>
	
	<body>
		<center>
			
			
			<h1>Eliminado</h1>
			
			<a href="index.php"></a>
			
		</center>
	</body>
</html>