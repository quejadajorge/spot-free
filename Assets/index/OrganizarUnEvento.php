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
    <link rel="stylesheet" href="../styles/OrganizarUnEvento.css">
    <link rel="stylesheet" href="../styles/styles.css">
    <title>Cliente</title>
    <link rel="icon" href="../SPOT-FREE/SPOT-FREE-6.png">
</head>
<body>
    <header>
        <img class="logo" src="../SPOT-FREE/SPOT-FREE-8.png" alt="Logo">
        <button id="abrir" class="abrir-menu"><i class="bi bi-list"></i></button>
        <nav class="nav" id="nav">
            <button class="cerrar-menu" id="cerrar"><i class="bi bi-x"></i></button>
            <ul class="nav-list">
                <li><a href="cliente.php">INICIO</a></li>
                <li><a href="#">ESCENARIOS</a>
                    <ul class="menu-vertical">
                        <li><a href="#">FUTBOL 5</a></li>
                        <li><a href="#">FUTBOL 7</a></li>
                        <li><a href="#">FUTBOL 9</a></li>
                        <li><a href="#">FUTBOL 11</a></li>
                        
                        </ul></li>
                <li><a href="eventos.php">EVENTOS</a>
                    <ul class="menu-vertical">
                        <li><a href="inscripciones.php">INSCRIPCION</a></li>
                        <li><a href="OrganizarUnEvento.php">ORGANIZACION DE EVENTO</a></li>
                    </ul></li>
                <li><a href="#">CONTACTO</a></li>
                <div class="log"> 
                <a href="#"><i class="bi bi-bell"></i></a>
                </div>
                <b><?php echo $_SESSION["nombres"]; ?></b>


                
                <div id="menuToggle" class="menu-toggle">
        <div class="linea"></div>
        <div class="linea"></div>
        <div class="linea"></div>
        
    </div>
    <nav id="menu" class="ocultar">
        <ul >
            <li><a href="#">Ver Perfil</a></li>
            <li><a href="../php/cerrar.php">Cerrar Sesion</a></li>
            <li><a href="../index/proveedor.php">Quiero ser proveedor</a></li>
        
        </ul>
    </nav>
    </div>
</ul>
            
        </nav>
    </header>
<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
</header>
<div class="hero">
    <div class="in">
        <br><br>
    <h1>Fútbol, diversión y eventos extraordinarios</h1>
    <h2>la pasión del fútbol se vive aquí</h2>
    <h>¡Únete a la experiencia!</h>
</div>
</div>


<div class="etapa1">
    <h2 class="titu">"Organizador de Eventos"</h2>
    <p class="titu">Descubre, Conéctate, Celebra</p>
</div>












</body>
</html>
    <!-- ::::Pie de Pagina:::::: -->
<div>
    <footer>
        <a>&copy; 2023 Reserva de Canchas de Fútbol</a>
        </footer>
    </div>

    <script src="../java/main.js"></script>

</body>
</html>