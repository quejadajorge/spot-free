<?php
session_start();

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../styles/tabla.css">
    <title>horarrios disponibles</title>
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


  /* Estilos generales de la modal */
  .modal-content {
    background-color: #ffffff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .modal-header {
    background-color: #007bff;
    color: #ffffff;
    padding: 1rem;
    border-bottom: 1px solid #dee2e6;
  }

  .modal-title {
    margin: 0;
  }

  .modal-body {
    padding: 1rem;
  }

  /* Estilos específicos del cuerpo del modal */
  .modal-body p {
    font-weight: bold;
    color: #333333;
  }

  /* Estilos del botón de cierre */
  .btn-close {
    color: #ffffff;
  }

  .btn-close:hover {
    color: #ffffff;
  }

  /* Estilos del pie de página del modal */
  .modal-footer {
    border-top: 1px solid #dee2e6;
    padding: 1rem;
    text-align: center;
  }

  .modal-footer .btn {
    margin: 0;
  }

  .modal-footer .btn-outline-secondary {
    color: #007bff;
    border-color: #007bff;
  }

  .modal-footer .btn-outline-secondary:hover {
    color: #0056b3;
    border-color: #0056b3;
  }

  .bee{
    color: black;
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
                
                <!-- <b><i class="bi bi-person-circle"></i> <?php echo ucfirst($_SESSION["nombres"]); ?></b> -->
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



<div class="tabla">

    <div class="container">
        <center>
        <br><br>
        <h2>Disponibilidad</h2>
        <br>
        <table>
            <thead>
                <tr>
                    <td class="controls"></td>
                    <td class="controls">Cancha</td>
                    <td class="controls">Tamaño</td>
                    <td class="controls">Hora inicio</td>
                    <td class="controls">Hora fin</td>
                    <td class="controls">Ubicacion</td>
                    <td class="controls">Disponibilidad</td>
                    <td class="controls">Reservar</td>
                </tr>
            </thead>

            <?php 
            include("conexion.php");
            $query= "SELECT * FROM cancha";
            $resultado = $conexion -> query($query);
            while($row=$resultado->fetch_assoc()){
            ?>

            <tr>
                <td><img height="120px" width="150px"  src="data:image/jpg;base64, <?php echo base64_encode($row['foto']);?>" alt=""></td>
                <td class="tabla1"><?php echo $row['nombre'];?></td>
                <td class="tabla1"><?php echo $row['tamaño'];?></td>
                <td class="tabla1"><?php echo $row['hora_inicio'];?></td>
                <td class="tabla1"><?php echo $row['hora_fin'];?></td>
                <td class="tabla1"><?php echo $row['ubicacion'];?></td>                               
                <td><a  type="button"  class="btn btn-primary" data-bs-toggle="modal"  data-bs-target="#staticBackdrop" href="?id=<?php echo $row['id']; ?>">
                Ver
            </a></td>
                <td><a type="button" name="btnenviar" class="btn btn-primary"  href="reservas.php?id=<?php echo $row['id']; ?>" >Reservar</a></td>
            </tr>
            <?php
            }
            ?>
        </table>
        <br><br>
        <a class="btn1" href="../index/cliente.php">Regresar</a>
        <br><br>
        </center>
    </div>
    <section>
        <footer>
            <p>&copy; 2023 Reserva de Canchas de Fútbol</p>
        </footer>
    </section>
</div>
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Horas ocupadas</h5>
        <a type="button" class="btn-close" href="../php/tabla.php" aria-label="Close"></a>
        </div>
        <div class="modal-body">
        <p><b class="bee">Encuentra Tu Horario Preferido</b></p>

<?php

include("../php/conexion.php");

$id= $_GET['id'];

$sql = "SELECT * FROM reservas WHERE id= $id";

$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    
    while ($row = $result->fetch_assoc()) {
            echo '<b class="bee">'. $row['opcion'] . '</b>'. "  -  ";
            echo '<b class="bee">'. $row['fecha']."<br>" .'</b>';
        
        
    }
} else {
    echo "No hay horas ocupadas en este momento.";
}




?>
    </div>
    <div class="modal-footer">
        <a  type="button" class="btn btn-outline-secondary" href="../php/tabla.php?id=" >Cerrar</a>
        
        
      </div>
    </div>
  </div>
</div>





<script src="../java/script.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</html>