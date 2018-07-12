<?php

session_start();
if(!isset($_SESSION["user"])){
  header("location:login.php");
}
?>
<?php
    include("abrir_conexion.php");
    $id=$_GET["id"];

    $sql = "SELECT codigo, Marca, Modelo, Falla, accesorios, fecha_entrada , fecha_salida, costo FROM reparaciones WHERE codigo = '$id' ";
    $result=mysqli_query($conexion, $sql);

    while ($registro = mysqli_fetch_array($result))
    {
      $id = $registro['codigo'];
      $marca = $registro["Marca"];
      $modelo = $registro['Modelo'];
      $falla = $registro['Falla'];
      $accesorios = $registro['accesorios'];
      $fecha_entrada= $registro['fecha_entrada'];
      $fecha_salida =$registro['fecha_salida'];
      $costo = $registro['costo'];
    
    }

  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Producto</title>
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
                <li class="active"><a href="" >Registros</a>  
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
                     
                    
            </nav>
          </div>
        </div>
      </header>
<h3>Editando  de clientes</h3>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <form  method="GET" action="actualizar_reparaciones.php" >
        <div class="form-group">
          <input type="text" class="form-control" name="id" value="<?php  echo $id ?>">
          <label for="codigo">
          Marca
          </label>
          <input type="text" class="form-control" name="marca" value="<?php echo $marca ?>">
           <label for="codigo">
          Modelo
          </label>
          <input type="text" class="form-control" name="modelo" value="<?php echo $modelo?>">
          <label for="codigo">
        Falla 
          </label>
          <input type="telephone" class="form-control" name="falla" value="<?php echo $falla ?>">
           <label for="codigo">
         Accesorios
          </label>
          <input type="text" class="form-control" name="accesorios" value="<?php echo $accesorios?>">
           <label for="codigo">
          Fecha de entrada
          </label>
          <input type="telephone" class="form-control" name="fecha_entrada" value="<?php echo $fecha_entrada ?>">
           <label for="codigo">
          Fecha de salidad
          </label>
          <input type="telephone" class="form-control" name="fecha_salida" value="<?php echo $fecha_salida ?>">
          <label for="codigo">
          Costo
          </label>
          <input type="telephone" class="form-control" name="costo" value="<?php echo $costo ?>">
        
       <center><input type="submit" value="Actualizar" name="btn_registra" class="btn btn-success"/></center>
 </form>
    </div>
  </div>
</div>
    <script src="js/script.js"></script>
  </body>

</html>

