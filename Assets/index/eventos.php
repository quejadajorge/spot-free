<?php
session_start();
if (empty($_SESSION["id"])){
    header("location:../index/inicio_sesion.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../styles/eventos.css">
    <title>Cliente</title>
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
    
        <section id="ilustracion">
    <div class="contenedor">
        <div class="txt">
            <h1>Eventos Recreacionales de futbol</h1>
            <h2>Reserva tu Evento de fútbol ahora</h2>
            <p>¡Disfruta del fútbol con tus amigos!</p>
        </div>
        
            <img src="../imagenes/Ilustracion1.png" alt="">
        
        </div>
        </section>
        
        
<!-- ::::::::::::::::::::::::::::::::::::::::::TABLA::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
        <section class="seccion">
        <div class="titulo">
        <h1>Reserva de Eventos de Fútbol</h1>    
        </div>
        <br>
        <div class="contenedor">
        
        <div class="vid">
            <video id="video1" autoplay muted playsinline  src="../Video/WhatsApp Video 2023-10-11 at 2.24.51 PM.mp4" class="video"></video>
        </div>

        <div class="formulario">
        <form action="">
            <h1 class="title">ORGANIZA TU EVENTO</h1>

            <label for="">Nombre:</label>
            <input type="text" name="nombre" placeholder="Nombre del organizador" REQUIRED>

            <label for="">Apellido:</label>
            <input type="text" name="apellido" placeholder="Apellido del organizador" REQUIRED>

            <label for="">Numero de telefono:</label>
            <input type="number" name="telefono" placeholder="Numero de telefono" REQUIRED>

            <label for="">Tipo de documento:</label>
            <input type="select" name="tipo_documento" placeholder="Tipo de documento" REQUIRED>

            <label for="">Numero de documento:</label>
            <input type="number" name="numero_documento" placeholder="Numero de documento" REQUIRED>

            <label for="">tipo de cancha:</label>
            <input type="text" name="tipo_cancha" placeholder="Tipo de cancha" REQUIRED>

            <label for="">Fecha de inicio:</label>
            <input type="date" name="fecha_inicio" REQUIRED>

            <label for="">Fecha de fin:</label>
            <input type="date" name="fecha_fin" REQUIRED>

            <input class="btn-sub" type="submit" value="Siguiente">

        </form>
        </div>


        </div>
        </section>


    <!--::::Pie de Pagina::::::-->
    <section>
        <footer>
            <a>&copy; 2023 Reserva de Canchas de Fútbol</a>
        </footer>
    </section>

    <script src="../java/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>