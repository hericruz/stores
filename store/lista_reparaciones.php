<?php

session_start();
if(!isset($_SESSION["user"])){
  header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Reparaciones</title>
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
  </head>

  <body>
    <div class="page">
      <!--
      ========================================================
      							HEADER
      ========================================================
      
      
      -->
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
                  <li class="active"><a href="">Registro</a>
                   <ul>
                    <li><a href="#"><img src="images/productos.png">Producto</a>
                      <ul>
                          <li><a href="lista_productos.php"><img src="images/ver.png">Ver</a></li>
                          <li><a href="registrar_productos.php"><img src="images/editar.png">Registrar</a></li>
                        </ul>
                      </li>
                     <li><a href="#"><img src="images/clientes.png">Clientes</a>
                      <ul>
                          <li><a href="lista_clientes.php"><img src="images/ver.png">Ver</a></li>
                          <li><a href="registrar_cliente.php"><img src="images/editar.png">Registrar</a></li>
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
                      <li><a > <?php echo $_SESSION["user"]; ?></a></li>
                       <li ><?php echo '<a href="index.html">Cerrar sesión</a>' ?></li>
                    
            </nav>
          </div>
        </div>
      </header>
    <body>

    <div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <h3>
        Lista de equipos para reparación
      </h3>
      <table class="table">
        <thead>
          <tr>
            <th>
              #
            </th>
            <th>
            Marca
            </th>
            <th>
              Modelo
            </th>
            <th>
              Falla
            </th>
            <th>
              Accesorios
            </th>
              <th>
              Fecha/Entrada
            </th>
              <th>
              Fecha/Salida
            </th>
              <th>
             Costo/Reparación 
            </th>
             <th>
             Cliente 
            </th>
          </tr>
        </thead>

    <?php 
    include ("abrir_conexion.php");
    $sql="SELECT * from reparaciones";
    $result=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result)){
     ?>

    <tr>
      <td><?php echo $mostrar['codigo'] ?></td>
      <td><?php echo $mostrar['Marca'] ?></td>
      <td><?php echo $mostrar['Modelo'] ?></td>
      <td><?php echo $mostrar['Falla'] ?></td>
      <td><?php echo $mostrar['accesorios'] ?></td>
      <td><?php echo $mostrar['fecha_entrada'] ?></td>
      <td><?php echo $mostrar['fecha_salida'] ?></td>
      <td><?php echo $mostrar['costo'] ?></td>
      <td><?php echo $mostrar['codigo_cliente'] ?></td>
      <td>
        <a href="modificar_reparaciones.php?id=<?php echo  "{$mostrar['codigo']}"?>"><img src="images/editar.png"></a></td>
      <td> <a href="delete_reparaciones.php?id=<?php echo  "{$mostrar['codigo']}"?>"><img src="images/eliminar.png"></a></td>
    </tr>
  <?php 
  }
   ?>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
    </div>
    <script src="js/script.js"></script>
  </body>
</html>