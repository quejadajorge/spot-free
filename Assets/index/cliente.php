<?php
session_start();
if (empty($_SESSION["id"])){
    header("location:../index/index.php");
}

include("../php/conexion.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../styles/cartas.css">
    <link rel="stylesheet" href="../styles/styles.css">
    <title>Cliente</title>
    <link rel="icon" href="../SPOT-FREE/SPOT-FREE-6.png">
</head>

<style>
    .dropdown-menu li a{
    color: rgb(255, 255, 255);
    margin-top: 0.5px;
    }

    .dropdown-menu li a:hover{
        color: black;
        
    }

    .dropdown-menu{
        background-color: #0a141d;
        margin-top: 10%;
    }

    .dropdown-divider{
        color:white;
    }

    .nav-item a{
        margin-top: -9%;
    }

    b{
        color: white;
    }

    nav li ul .submenu li ul{
        position: relative;
        display: none;
    }

    nav li ul .submenu li:hover > ul{
        display: block;
    }

    nav li .nav-link:hover{
        color: white;
    }

    .menu{
        margin-top: -2px;
    }

    .collapse {
    margin-top: 20px; /* Ajusta el margen superior según tus preferencias */
    }

    .card {
    background-color: #ffffff; /* Cambia el color de fondo según tus preferencias */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Agrega una sombra según tus preferencias */
    }

    .card-body {
    padding: 20px; /* Ajusta el relleno según tus preferencias */
    }

    @media screen and (max-width: 550px) {
        .collapse{
            margin-top: 50px;
        }
    }
</style>

<body>


    <header>
        <img class="logo" src="../IMAGENES PRUEBA/SPOT-FREE-4.png" alt="Logo">
        <button id="abrir" class="abrir-menu"><i class="bi bi-list"></i></button>
        <nav class="nav" id="nav">
            <button class="cerrar-menu" id="cerrar"><i class="bi bi-x"></i></button>
            <ul class="nav-list">
                <li><a href="../index/cliente.php"><i class="bi bi-house"></i> Inicio</a></li>
                <li><a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Mis reservas</a></li>
                <li><a href="../index/reservas.php">Escenarios</a></li>
                
                <b><i class="bi bi-person-circle"></i> <?php echo ucfirst($_SESSION["nombres"]); ?></b>
        <li class="nav-item dropdown">
            
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Menu</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="../index/proveedor.php"><i class="bi bi-plus-circle"></i> Quiero ser proveedor</a></li>
      <li><a class="dropdown-item" href="../php/miCancha.php"><i class="bi bi-trophy"></i> Mis canchas</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="../php/cerrar.php"><i class="bi bi-door-open"></i> Cerrar sesión</a></li>
      <div class="submenu">
        <li>
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href=""  aria-expanded="false"> <i class="bi bi-person"></i> Mi informacion</a>
            <ul class="menu dropdown-menu">
                <li><a class="dropdown-item" href="../index/reservasHistorial.php?id=<?php ['id']; ?>">Historial de reservas</a></li>
                <li><a class="dropdown-item" href="../index/cambiarContraseña.php?id=<?php ['id']; ?>">Cambiar contraseña</a></li>
                <li><a class="dropdown-item" href="../index/verPerfil.php?id=<?php ['id']; ?>">Actualizar información</a></li>
            </ul>
        </li>
        </div>
    </ul>
    
  </li>

  

  
        
    </div>
    </div>
</ul>
            
        </nav>
       
    </header>

<div class="collapse" id="collapseExample">
    <div class="card card-body">
        
            <table class="table">
    <H4>Horas Reservadas</H4>
    <thead>
                <tr>
                    <td class="col">Horas reservadas</td>
                    <td class="col">Fecha</td>
                    
                </tr>
            </thead>






    <?php
    $query= "SELECT * FROM reservas WHERE id_cliente  =   " . $_SESSION['id'] ;
        $resultado  = $conexion->query($query);
        while ($row = $resultado->fetch_assoc()) {
        
    ?>




    <tr>
        <td class="tabla1"><?php echo $row['opcion'];  ?></td>
        <td class="tabla1"><?php echo $row['fecha']; ?> </td>
        
    </tr>
    
<?php } ?>
            </table>
</div>
    
        </div>
            
        

    
                
    <section>
        <div class="carusel">
            
        <div class="slide">
            <video id="video1" autoplay muted playsinline class="vid">
                <source src="../Video/RESERVA.mp4" type="video/mp4">
                </video>
        </div>
        <div class="slide">
        <img src="../imagenes/imagen2-carrusel.jpg" alt="Imagen 2">
        <div class="fondo-slide">
            <h1>RESERVA TU CANCHA AL INSTANTE</h1>
            <h3>Explora las canchas disponibles de la ciudad</h3>
        </div>
        </div>
        <div class="slide">
        <img src="../imagenes/imagen3-carrusel.jpg" alt="Imagen 3">
        <div class="fondo-slide">
            <h1>RESERVA TU CANCHA AL INSTANTE</h1>
            <h3>Explora las canchas disponibles de la ciudad</h3>
        </div>
        </div>
        <div class="slide">
            <video id="video1" autoplay muted playsinline class="vid">
            <source src="../Video/WhatsApp Video 2023-09-04 at 2.15.36 PM.mp4" type="video/mp4">
            </video>
            <div class="fondo-slide">
                <h1><strong>RESERVA TU CANCHA AL INSTANTE</strong></h1>
                <h3>Explora las canchas disponibles de la ciudad</h3>
            </div>
        </div>
        <button class="prev-button"><i class="bi bi-arrow-bar-left"></i></button>
        <button class="next-button"><i class="bi bi-arrow-bar-right"></i></button>
    
    </div>
</div>


    <p class="p-sec">Bienvenido a nuestro software de alquiler de escenarios deportivos.</p>
</section>

<section class="sec-2">
    <div class="text">
        <h1><strong>Tecnologia al servicio del deporte en Cartagena</strong></h1>
        <h4>Reserva canchas disponibles en la ciudad de Cartagena en tiempo real.</h4><br>
        <div>
            
            <a href="../php/tabla.php" class="ov-btn-slide-left">VER DISPONIBILIDAD</a>
            <div class="img-anim">
                <img src="../imagenes/sinfondo.png" alt="">
            </div>
        </div>
        </div>

        <p class="sec-p">Visualiza un poco sobre los diferentes escenarios deportivos de la ciudad</p>
    </section>

        <div class="card">
            <div class="face front">
                <img src="../imagenes/sintetica-blas-de-lezojpg.jpg" alt="">
                <h3>Cancha Blas de Lezo</h3>
            </div>
            <div class="face back">
                <h3>Escenario 1</h3>
                <p>Ubicacion: Blas de lezo</p>
                <p>Tarifa: $100.000</p>
                <p>Horario: 6:00am - 9:00pm</p>
                <div class="link">
                    <a href="#">Mas Informacion</a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="face front">
                <img src="../imagenes/Cancha-San-Fernando.jpg" alt="">
                <h3>Cancha - San Fernando</h3>
            </div>
            <div class="face back">
                <h3>Escenario 2</h3>
                <p>Ubicacion: San Fernando</p>
                <p>Tarifa: $110.000</p>
                <p>Horario: 6:00am - 12:00pm</p>
                <div class="link">
                    <a href="#">Mas Informacion</a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="face front">
                <img src="../imagenes/Cancha-Los-Calamares.jpg" alt="">
                <h3>Cancha - Los Calamares</h3>
            </div>
            <div class="face back">
                <h3>Escenario 3</h3>
                <p>Ubicacion: Calamares</p>
                <p>Tarifa: $90.000</p>
                <p>Horario: 6:00am - 10:00pm</p>
                <div class="link">
                    <a href="#">Mas Informacion</a>
                </div>
            </div>
        </div>


        <!-- <?php 
    
    $query= "SELECT * FROM reservas  WHERE id_cliente =   " . $_SESSION['id'] ;
        $resultado  = $conexion->query($query);
        while ($row = $resultado->fetch_assoc()) {

?>
<?php echo $row['opcion'] . " - " ?>
<?php echo $row['fecha'] . "<br>" ?>


<?php } ?> -->


    <!--::::Pie de Pagina::::::-->
    <div class="pie-pagina">
    <footer id="footer" class="pie-pagina">
    <div class="grupo-1">
        <div class="box">
            <figure>
                <a href="#">
                    <img src="../SPOT-FREE/SPOT-FREE-8.png" alt="Logo de SLee Dw">
                </a>
            </figure>
        </div>
        <div class="box">
            <h2>SOBRE NOSOTROS</h2>
            <p>Te mostramos los beneficios de tener un canal online para gestionar tu club que permite a los usuarios reservar online.</p>
            <p>Dejanos tus datos de contacto así podemos ponernos en contacto contigo.</p>
        </div>
        <div class="box">
            <h2>SIGUENOS</h2>
            <div class="red-social">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-threads"></i></a>
            </div>
        </div>
    </div>
    <div class="grupo-2">
        <small>&copy; 2023 <b>Spot Free</b> - Todos los Derechos Reservados.</small>
    </div>
</footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="../java/script.js"></script>
</body>
</html>