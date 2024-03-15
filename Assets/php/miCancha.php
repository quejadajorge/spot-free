<?php 
include("../php/conexion.php");

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../styles/miCancha.css">
    <title>Mis canchas</title>
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


<div class="card-header">
            <h1>Mis canchas</h1>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        
                        <th scope="col">Nombre</th>
                        <th scope="col">Reservas</th>
                        <th scope="col"></th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query      = "SELECT * FROM cancha  WHERE id_cliente =   " . $_SESSION['id'] ;
                    $resultado  = $conexion->query($query);
                    while ($row = $resultado->fetch_assoc()) {
                    ?>
                        <tr>
                            
                            <td><h4><?php echo ucfirst($row['nombre']) ?></h4></td>
                            <td><a href="?id=<?php echo $row['id'] ?>" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Ver
                        </a></td>
                            
                        </tr>
                    <?php
                    } 
                    ?>

                </tbody>
            </table>
        </div>
    </div>



    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reservas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Reservas</th>
              <th scope="col">Nombre</th>
              <th scope="col">Fecha</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $query = "SELECT opcion, nombres, fecha FROM reservas  where id = " . $_GET['id'] ; 
            $resultado  = $conexion->query($query);
            while ($row = $resultado->fetch_assoc()) {
            ?>
              <tr>
                <td><?php echo $row['opcion'] ?></td>
                <td><?php echo $row['nombres'] ?></td>
                <td><?php echo $row['fecha'] ?></td>
              </tr>
              
            
            <?php
            } 
            ?>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <a href="../php/miCancha.php?id="   class="btn btn-secondary" >Cerrar</a>
        
      </div>
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="../java/script.js"></script>
</body>
</html>