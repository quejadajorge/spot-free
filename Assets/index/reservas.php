<?php
session_start();
if (empty($_SESSION["id"])){
    header("location:../index/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../styles/reservas.css">
    <!-- <link rel="stylesheet" href="../styles/styles.css"> -->
    <link rel="stylesheet" href="../styles/footer.css">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <title>SPOT-FREE</title>
    <link rel="icon" href="../SPOT-FREE/SPOT-FREE-6.png">
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
</style>
</head>
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
                <li><a class="dropdown-item" href="#">Historial de reservas</a></li>
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

    
    <section class="hero">
        <div class="in">
        <h2>Reserva tu cancha de fútbol ahora</h2>
        <p>¡Disfruta del fútbol con tus amigos!</p>
    </div>
    <img src="../imagenes/ilustracion3.png" alt="">
    </section>

    <section class="canchas">
        <div class="contenido">
            <h1 class="nosotros">Nuestras Canchas</h1>
        </div>
    </section>
    <section class="section-back">
    <div class="container">
        <div class="cancha">
            <img src="../imagenes/cancha1.jpg" alt="Cancha 1">
            <h3>Cancha 1</h3>
            <p>Descripción de la cancha y características.</p>
            <a href="#" class="ov-btn-slide-rightt">Reservar</a>
        </div>
        <div class="cancha">
            <img src="../imagenes/cancha2.jpg" alt="Cancha 2">
            <h3>Cancha 2</h3>
            <p>Descripción de la cancha y características.</p>
            <a href="#" class="ov-btn-slide-rightt">Reservar</a>
        </div>
        <div class="cancha">
            <img src="../imagenes/cancha3.jpg" alt="Cancha 3">
            <h3>Cancha 3</h3>
            <p>Descripción de la cancha y características.</p>
            <a href="#" class="ov-btn-slide-rightt">Reservar</a>
        </div>
    </div>
    
</section>
        

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