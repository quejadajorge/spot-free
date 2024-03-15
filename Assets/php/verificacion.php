<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <?php
include("conexion.php");
session_start();
    if (!empty($_POST["btningresar"])){
        if(!empty($_POST["correo"]) and !empty ($_POST["contraseña"])){
            $correo = $_POST["correo"];
            $contraseña = $_POST["contraseña"];
            $sql=$conexion->query("SELECT * FROM cliente where correo='$correo' and contraseña='$contraseña'" );
            if ($datos=$sql->fetch_object()){
                $_SESSION["id"]=$datos->id;
                $_SESSION["id_cancha"]=$datos->id_cancha;
                $_SESSION["nombres"]=$datos->nombres;
                $_SESSION["apellido"]=$datos->apellidos;
                $_SESSION["correo"]=$datos->correo;
                $_SESSION["telefono"]=$datos->telefono;
                header("location:../index/cliente.php");
            }else{
                
                echo '<script>alert("Credenciales incorrectos."); window.location.href = "../index/index.php";</script>';
            }
        }else{
            echo "campos vacios";
        }
    }

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

<?php
