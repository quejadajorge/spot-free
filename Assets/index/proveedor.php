<?php
session_start();
if (empty($_SESSION["id"])){
    header("location:../index/inicio_sesion.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../styles/proveedores.css">
    <title>Registra tu escenario</title>
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

    <img class="img" src="../imagenes/malla-removebg-preview.png" alt="">
    
    <section>
    <div class="contenedor">
        <center>
    <form class="registro" action="../php/save.php" method="POST" enctype="multipart/form-data">
        <h2>Registra Tu Escenario</h2>
        
        <input type="text" placeholder="Nombre" name="nombre" REQUIRED> <br></br>

        <input type="text" placeholder="Tamaño" name="tamaño" REQUIRED> <br></br>

        <input type="text" placeholder="Ubicacion" name="ubicacion" REQUIRED> <br></br>

        <label for="">Hora Inicio</label>

        <input type="time"  name="hora_inicio" REQUIRED> <br></br>

        <label for="">Hora Fin</label>

        <input type="time"name="hora_fin" REQUIRED> <br></br>

        <input type="text" placeholder="Tipo de superficie" name="superficie" REQUIRED> <br></br>

        <input type="file" placeholder="Foto" name="foto"><br></br>

        <div>
            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate" REQUIRED>
            <label class="form-check-label" for="flexCheckIndeterminate">
                Acepto terminos y condiciones
            </label>
            </div><br>

        <input  class="btn" type="submit" value="Guardar">

        <a class="back" href="../index/cliente.php">Volver</a>

    </form>
</center>
</section>

<section>
        <footer>
            <p>&copy; 2023 Reserva de Canchas de Fútbol</p>
        </footer>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="../java/script.js"></script>
</body>
</html>