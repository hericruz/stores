<?php

session_start();
if(!isset($_SESSION["user"])){
  header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Clientes</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/camera.css">
    <link rel="stylesheet" href="css/owl-carousel.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/device.min.js"></script>
    <link href="css2/bootstrap.min.css" rel="stylesheet">
    <link href="css2/style.css" rel="stylesheet">

  </head>

  <body>
    <div class="page">
  <header>
        <div class="container">
          <div class="brand">
           <img src="images/logo.png">
          </div><a href="callto:#" class="fa-phone">775-750-94-29</a>
        </div>
        <div id="stuck_container" class="stuck_container">
          <div class="container">
            <nav class="nav">
              <ul data-type="navbar" class="sf-menu">
                <li ><a href="home.php">Home</a>
                </li>
                <li class="active"><a href="" >Registro</a>  
                   <ul>
                    <li><a href="#"><img src="images/productos.png">Producto</a>
                      <ul>
                          <li><a href="lista_productos.php"><img src="images/ver.png">Ver</a></li>
                          <li><a href="registrar_productos.php"><img src="images/editar.png">Registrar</a></li>
                        </ul>
                      </li>
                     <li class="active"><a href="#"><img src="images/clientes.png">Clientes</a>
                      <ul>
                          <li><a href="lista_clientes.php"><img src="images/ver.png">Ver</a></li>
                          <li><a href="registrar_cliente.php" class="active"><img src="images/editar.png">Registrar</a></li>
                        </ul>
                      </li>
                       <li><a href="#"><img src="images/reparaciones.png">Reparaciones</a>
                      <ul>
                         <li><a href="lista_reparaciones.php"><img src="images/ver.png">Ver</a></li>
                          <li><a href="registro_reparaciones.php"><img src="images/editar.png">Registrar</a></li>
                        </ul>
                      </li>
                       <li><a href="#"><img src="images/usuarios.png">Usuarios</a>
                      <ul>
                          <li><a href="lista_usuarios.php"><img src="images/ver.png">Ver</a></li>
                          <li><a href="registra_usuarios.php"><img src="images/editar.png">Registrar</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>

                      <li ><a href="./">Ventas</a>
                        <ul>
                         <li><a href="ventas.php"><img src="images/Venta.png">Realizar</a></li>
                          <li><a href="historial_ventas.php"><img src="images/historial.png">Historial</a></li>
                        </ul>
                      </li>
                      <li ><a href="index-3.php">Acerca de </a></li>
                      <li ><a href="./">Ayuda</a></li>
                    
                      <li ><img src="images/usuario.png" align="rigth"></li>
                      <li><a ><?php echo $_SESSION["user"]; ?></a></li>
                      <li ><?php echo '<a href="logout.php">Cerrar sesión</a>' ?></li>
                    
            </nav>
          </div>
        </div>
      </header>
<h3>Registro de clientes</h3>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <form  method="POST" action="registrar_cliente.php" >
        <div class="form-group">
          <label for="codigo">
          Codigo
          </label>
          <input type="text" class="form-control" name="codigo">
        </div>
        <div class="form-group">
          <label for="nombre">
          Nombre
          </label>
          <input type="text" class="form-control" name="nombre">
        </div>
        <div class="form-group">
          <label for="apellido">
          Apellido
          </label>
          <input type="text" class="form-control" name="apellido">
        </div>
        <div class="form-group">
          <label for="telefono">
          N. Tel
          </label>
          <input type="text" class="form-control" name="tel">
        </div>
        <div class="form-group">
          <label for="email">
          Correo Electronico
          </label>
          <input type="text" class="form-control" name="email">
        </div>
        <center><input type="submit" value="Registrar" name="btn_registra" class="btn btn-success" /></center>
 </form>
 <?php
    if (isset($_POST['btn_registra']))
    {
      include("abrir_conexion.php");

      $codigo=$_POST['codigo'];
      $nombre=$_POST['nombre'];
      $apellido=$_POST['apellido'];
      $tel=$_POST['tel'];
      $email=$_POST['email'];
$conexion->query("INSERT INTO $tabla_db1 (codigo_cliente,Nombre,Apellidos,Numero_tel,correo) VALUES ('$codigo','$nombre','$apellido','$tel','$email') ");

      include("cerrar_conexion.php");
    }
  ?>
</div>
</div>
     

 </form>
    </div>
  </div>
</div>
    <script src="js/script.js"></script>
  </body>

</html>

