<?php 
$id=$_GET["id"];
$marca = $_GET["marca"];
$modelo = $_GET["modelo"];
$color =$_GET["color"];
$caracteristica  = $_GET["caracteristicas"];
$precio  = $_GET["precio"];
$cantidad  = $_GET["cantidad"];

 require ('abrir_conexion.php');
 $query = "UPDATE productos SET Marca='$marca', Modelo='$modelo', Color ='$color', Caracticas='$caracteristica', Precio = '$precio', cantidad = '$cantidad'  WHERE codigo=$id ";
 mysqli_query($conexion, $query);
 echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=lista_productos.php'>";

 ?>