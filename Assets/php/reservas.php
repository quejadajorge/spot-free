<?php
session_start();
if (empty($_SESSION["id"])){
    header("location:../index/index.php");
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/estilo2.css">
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
            font-size: 20px;
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
            margin-left: 280px;

        }


        .carta{
            display: flex;
            margin-left: 280px;
            /* border: 5px solid #333; */
            justify-content: center;
            align-items: center;
            margin-left: -50px;
        }

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
    <!-- ############################################## -->

<!-- ############################################################ -->

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

<div class="info">
    <div class="linea"></div>
<div class="titulo1">
        <center><h1><?php echo ucfirst($nombre)?></h1></center>
</div>
    <div class="linea"></div>
<div class="carta">
    <div class="imagen">
<img height="250px" width="300px"  src="data:image/jpg;base64, <?php echo base64_encode ($foto);?>" alt="">
</div>
<div class="caracteristica">
    <div class="cancha">
        <h1>Cancha</h1>     <?php  echo ucfirst($nombre)?><br>    
    </div>
<div class="ubicacion">
    <h3>Ubicacion</h3>  <?php  echo ucfirst($ubicacion)?><br>    
</div>
<div class="capacidad">
        <h3>Capacidad</h3>  <?php  echo ucfirst($tamaño)?><br>
</div>
</div>
</div>

<div class="formulario">


<h4></h4>
<?php




include("../php/conexion.php");

$sql = "SELECT start_datetime, end_datetime FROM schedule_list WHERE disponibilidad = 0";
$result = $conexion->query($sql);


if ($result->num_rows > 0) {
    echo "<h3>Horas disponibles:</h3>". "<br>";
    while ($row = $result->fetch_assoc()) {
?> 
<?php if(isset($_POST['btnenviar'])){
        $id = $_POST ['id'];
} ?>



<div class="formulario">
<form action="guardar_checkbox.php" method="POST">
<h4 class="card-title">Seleccione la Hora</h4> 
    <div class="form-check">
        
        <input class="form-check-input" type="checkbox" value="<?php  echo  $row["start_datetime"] ." - ". $row["end_datetime"] ?>" id="flexCheckIndeterminate" name="opcion[]">
        <label class="form-check-label" for="flexCheckIndeterminate">
        <?php  echo  $row["start_datetime"] ." - ". $row["end_datetime"] .  "<br>" . "<br>"; ?>
        </label>  
    </div>   
    <?php } ?>
    <?php
    } else {
        echo "No hay horas disponible en este momento.";
    }
?>

    <input class="fecha" type="date" name="fecha" required> 

    <input class="nombres" type="text" name="nombres" placeholder="Nombre de la reserva" required>

    <input type="hidden" name="id" value="<?php echo $id ?>">
    
    <div class="card-body2">
    <center><input type="submit" value="Reservar" class="btn-sub"></center>    
    </div>
</form>
</div>

</div>

</div>


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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="./js/script.js"></script>


</html>

</div>
</div>
<br>
<br>
<br>


<h4></h4>