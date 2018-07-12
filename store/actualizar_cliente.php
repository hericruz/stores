<?php 
$id=$_GET["id"];
$nombre = $_GET["nombre"];
$apellidos = $_GET["apellidos"];
$tel =$_GET["telefono"];
$correo = $_GET["correo"];

 require ('abrir_conexion.php');
 $query = "UPDATE cliente SET Nombre='$nombre', Apellidos='$apellidos', Numero_tel='$tel', correo='$correo'  WHERE codigo_cliente=$id ";
 mysqli_query($conexion, $query);
echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=lista_clientes.php'>";a

 ?>