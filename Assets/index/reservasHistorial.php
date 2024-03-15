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
    <!-- <link rel="stylesheet" href="../styles/cartas.css"> -->
    <link rel="stylesheet" href="../styles/styles.css">
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

        .tabla {
            margin-top: 7%;
        }

        h2 {
            color: #001bff;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        .tabla1 {
            text-align: center;
        }

        .btn1 {
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            display: inline-block;
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



<div class="tabla">

    <div class="container">
        <center>
        <br><br>
        <h2>Historial de reservas</h2>
        <br>
        <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <td class="col">Registro de reserva</td>
                    <td class="col">Horas reservadas</td>
                    <td class="col">Fecha</td>
                    <td class="col">Nombre</td>
                    <td class="col">Usuario</td>
                    
                </tr>
            </thead>

            <?php 
            include("../php/conexion.php");
            $query= "SELECT * FROM reservasHistorial  WHERE id_cliente =   " . $_SESSION['id'] ;
            $resultado  = $conexion->query($query);
            while ($row = $resultado->fetch_assoc()){
            ?>

            <tr>
                <td ><?php echo $row['fechaRegistro'];?></td>
                <td><?php echo $row['horas'];?></td>
                <td><?php echo $row['fecha'];?></td>
                <td><?php echo $row['nombre'];?></td>
                <td><?php echo $row['usuario'];?></td>
            </tr>
            <?php
            }
            ?>
        </table>
        </div>
        <br><br>
        <a class="btn1" href="../index/cliente.php">Regresar</a>
        <br><br>
        </center>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>