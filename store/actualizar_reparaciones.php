<?php 
$id=$_GET["id"];
$marca = $_GET["marca"];
$modelo = $_GET["modelo"];
$falla =$_GET["falla"];
$accesorios = $_GET["accesorios"];
$fecha_entrada  = $_GET["fecha_entrada"];
$fecha_salida  = $_GET["fecha_salida"];
$costo = $_GET["costo"];


 require ('abrir_conexion.php');
 $query = "UPDATE reparaciones  SET Marca='$marca', Modelo='$modelo', Falla ='$falla', accesorios='$accesorios', fecha_entrada = '$fecha_entrada', fecha_salida = '$fecha_salida', costo= '$costo' WHERE codigo=$id ";

 echo $query;
 mysqli_query($conexion, $query);
 echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=lista_reparaciones.php'>";

 ?>