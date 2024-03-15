<?php
session_start();
if (empty($_SESSION["id"])){
    header("location:../index/inicio_sesion.php");
}
?>

<?php  include("../php/conexion.php") ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estilo.css">
    <!-- <link rel="stylesheet" href="./fullcalendar/lib/main.min.css"> -->
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <!-- <script src="./fullcalendar/lib/main.min.js"></script> -->
    <style>
        :root {
            --bs-success-rgb: 71, 222, 152 !important;
        }

        html,
        body {
            height: 100%;
            width: 100%;
            
        }

        .btn-info.text-light:hover,
        .btn-info.text-light:focus {
            background: #000;
        }
        table, tbody, td, tfoot, th, thead, tr {
            border-color: #ededed !important;
            border-style: solid;
            border-width: 1px !important;
        }

        .img{
            display: flex;
            align-items: right;
            justify-content: center;   
        }


        .carta{
            display: flex;
            margin-left: 225px;
        }
    </style>
</head>

<body class="bg-light">

<header>
        <img class="logo" src="../IMAGENES PRUEBA/SPOT-FREE-4.png" alt="Logo">
        <button id="abrir" class="abrir-menu"><i class="bi bi-list"></i></button>
        <nav class="nav" id="nav">
            <button class="cerrar-menu" id="cerrar"><i class="bi bi-x"></i></button>
            <ul class="nav-list">
                <li><a href="../index/cliente.php">INICIO</a></li>
                <li><a href="#">ESCENARIOS</a>
                    <ul class="menu-vertical">
                        <li><a href="#">FUTBOL 5</a></li>
                        <li><a href="#">FUTBOL 7</a></li>
                        <li><a href="#">FUTBOL 9</a></li>
                        
                        </ul></li>
                <li><a href="../index/eventos.php">EVENTOS</a>
                    <ul class="menu-vertical">
                        <li><a href="../index/inscripciones.php">INSCRIPCION</a></li>
                        <li><a href="../index/OrganizarUnEvento.php">ORGANIZACION DE EVENTO</a></li>
                    </ul></li>
                <li><a href="#footer">CONTACTO</a></li>
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
    
<!-- Detalles De Reserva -->
    <?php
    include("../php/conexion.php");

    $id= $_GET['id'];

    $sql= "SELECT * FROM cancha WHERE id = $id";
        if($result=mysqli_query($conexion, $sql)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    $foto = $row['foto'];
                    $nombre = $row['nombre'];
                    $tamaño = $row['tamaño'];
                    $ubicacion = $row['ubicacion'];

            }
    }
        mysqli_free_result($result);
    }else{
        echo"No existe este usuario con dicho id.";
    }
    mysqli_close($conexion);
    ?>


        <center><h1><?php echo ucfirst($nombre)?></h1></center>

<div class="carta">
<img height="470px" width="550px"  src="data:image/jpg;base64, <?php echo base64_encode ($foto);?>" alt=""><br><br> 
<div class="caracteristica">
    <h2>Cancha</h2>     <?php  echo ucfirst($nombre)?><br> 
    <h2>Ubicacion</h2>  <?php  echo ucfirst($ubicacion)?><br>
    <h2>Capacidad</h2>  <?php  echo ucfirst($tamaño)?><br>
</div>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Seleccione la hora</h5>
    
<?php


include("../php/conexion.php");

$sql = "SELECT start_datetime, end_datetime FROM schedule_list WHERE disponibilidad= 0";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    echo "Horas disponibles:". "<br>";
    while ($row = $result->fetch_assoc()) {
?> 
    
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate" name="ocupada">
        <label class="form-check-label" for="flexCheckIndeterminate">
        <?php echo  $row["start_datetime"] ."-". $row["end_datetime"] .  "<br>"; ?>
        </label>  
    </div>   
    
    <?php } ?>
    <?php
    } else {
        echo "No hay horas ocupadas en este momento.";
    }
?>

  </div>
  <div class="card-body">
    <center><a href="../index/confirReserva.php" class="card-link">Confirmar</a></center>
    
  </div>
</div>

    <!-- <div class="container py-5" id="page-container">
        <div class="row">
            <div class="col-md-9">
                <div id="calendar"></div>
            </div>
            <div class="col-md-3">
                <div class="cardt rounded-0 shadow">
                    <div class="card-header bg-gradient bg-primary text-light">
                        <h5 class="card-title">Reservar Escenario</h5>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <form action="save_schedule.php" method="post" id="schedule-form">
                                <input type="hidden" name="id" value="">
                                <div class="form-group mb-2">
                                    <label for="title" class="control-label">Nombres</label>
                                    <input type="text" class="form-control form-control-sm rounded-0" name="title" id="title" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="fecha" class="control-label">Fecha</label>
                                    <input type="date" class="form-control form-control-sm rounded-0" name="fecha" id="fecha" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="start_datetime" class="control-label">Inicio</label>
                                    <input type="time" class="form-control form-control-sm rounded-0" name="start_datetime" id="start_datetime" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="end_datetime" class="control-label">Fin</label>
                                    <input type="time" class="form-control form-control-sm rounded-0" name="end_datetime" id="end_datetime" required>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <button  class="btn btn-primary btn-sm rounded-0" type="submit" form="schedule-form"><i class="fa fa-save"></i> Guardar</button>
                            <button class="btn btn-default border btn-sm rounded-0" type="reset" form="schedule-form"><i class="fa fa-reset"></i> Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>     -->

    <!-- Event Details Modal -->
    <div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0">
                <div class="modal-header rounded-0">
                    <h5 class="modal-title">Detalles de evento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body rounded-0">
                    <div class="container-fluid">
                        <dl>
                            <dt class="text-muted">Nombre</dt>
                            <dd id="title" class="fw-bold fs-4"></dd>
                            <dt class="text-muted">Descripción</dt>
                            <dd id="description" class=""></dd>
                            <dt class="text-muted">Inicio</dt>
                            <dd id="start" class=""></dd>
                            <dt class="text-muted">Fin</dt>
                            <dd id="end" class=""></dd>
                        </dl>
                    </div>
                </div>
                <div class="modal-footer rounded-0">
                    <div class="text-end">
                        <button type="button" class="btn btn-primary btn-sm rounded-0" id="edit" data-id="">Editar</button>
                        <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete" data-id="">Eliminar</button>
                        <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Details Modal -->
    

    <!-- FOTER -->
    <!-- <div class="pie-pagina">
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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsa?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsa?</p>
        </div>
        <div class="box">
            <h2>SIGUENOS</h2>
            <div class="red-social">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-youtube"></a>
            </div>
        </div>
    </div>
    <div class="grupo-2">
        <small>&copy; 2023 <b>Spot Free</b> - Todos los Derechos Reservados.</small>
    </div>
</footer>
</div> -->
   
</body>
<script>
    var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
</script>
<script src="./js/script.js"></script>
<script src="./js/java.js"></script>

</html>