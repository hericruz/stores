<?php

session_start();
if(!isset($_SESSION["user"])){
  header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Acerca de</title>
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
                <li class="active"><a href="home.php">Home</a>
                </li>
                  <li><a href="">Registro</a>
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
      <!--
      ========================================================
                                  CONTENT
      ========================================================
      -->
      <main>
        <section class="well1">
          <div class="container">
            <h2>¿Quienes somos?</h2>
            <p>Somos una empresa responsable,  dedicada al desarrollo de puntos de venta y servicio de computo. Te ofrecemos puntos de venta de acuerdo al negocio que tengas.  Gracias por confiar en nosostros. </p>
            <hr>
            <ul class="contact-list2 row">
              <li class="grid_3">
                <h3>Mexico</h3><a href="callto:#">+1 800 603 6035</a>
                <dl>
                  <dt>Lunes - Viernes:</dt>
                  <dd>8am-4pm</dd>
                </dl>
              </li>
              <li class="grid_3">
                <h3>Monterrey</h3><a href="callto:#">+1 800 603 6035</a>
                <dl>
                  <dt>Lunes - Viernes:</dt>
                  <dd>8am-4pm</dd>
                </dl>
              </li>
              <li class="grid_3">
                <h3>Guadalajara</h3><a href="callto:#">+1 800 603 6035</a>
                <dl>
                  <dt>Lunes - Viernes:</dt>
                  <dd>8am-4pm</dd>
                </dl>
              </li>
              <li class="grid_3">
                <h3>Yucatan</h3><a href="callto:#">+1 800 603 6035</a>
                <dl>
                  <dt>Lunes - Viernes:</dt>
                  <dd>8am-4pm</dd>
                </dl>
              </li>
            </ul>
            
          </div>
        </section>
        <section class="well bg-secondary2">
          <div class="container">
            <ul class="row product-list">
              <li class="grid_6">
                <div class="box wow fadeInRight">
                  <div class="box_aside">
                    <div class="icon fa-star"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3><a href="#">Calidad</a></h3>
                    <p>Te ofrecemos puntos de venta de calidad y moldeables a tu negocio</p>
                  </div>
                </div>
                <hr>
                <div data-wow-delay="0.3s" class="box wow fadeInRight">
                  <div class="box_aside">
                    <div class="icon fa-envelope"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3><a href="#">Cotizaciones </a></h3>
                    <p>Te enviamos la cotización del punto de venta que necesites</p>
                  </div>
                </div>
              </li>
              <li class="grid_6">
                <div data-wow-delay="0.2s" class="box wow fadeInRight">
                  <div class="box_aside">
                    <div class="icon fa-laptop"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3><a href="#">Factibilidad</a></h3>
                    <p>Solo nececitas un equipo de computo y conexion a internet para empezar a llevar el control de tu negocio </p>
                  </div>
                </div>
                <hr>
                <div data-wow-delay="0.4s" class="box wow fadeInRight">
                  <div class="box_aside">
                    <div class="icon fa-cogs"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <h3><a href="#">Herramienta</a></h3>
                    <p>El punto de venta cuenta con herramientas y formularios sencillos de usar</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>
        
      </main>
      <!--
      ========================================================
                                  FOOTER
      ========================================================
      -->
      <footer>
        
      </footer>
    </div>
    <script src="js/script.js"></script>
  </body>
</html>