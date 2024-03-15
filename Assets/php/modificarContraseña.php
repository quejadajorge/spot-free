<?php
include("../php/conexion.php");

session_start();  

$id = $_SESSION['id'];


$nuevaContraseña     = $_POST['nuevaContraseña'];
$confirmarContraseña = $_POST['confirmarContraseña'];

$query = "SELECT contraseña FROM cliente WHERE id = '$id'";
$resultado = $conexion->query($query);



        // Verificar si la nueva contraseña y la confirmación coinciden
        if ($nuevaContraseña == $confirmarContraseña) {
            // Actualizar la contraseña en la base de datos

            $updateQuery = "UPDATE cliente SET contraseña = '$nuevaContraseña' WHERE id = '$id'";
            $resultadoUpdate = $conexion->query($updateQuery);

            if ($resultadoUpdate) {
                echo '<script>alert("Contraseña cambiada exitosamente."); window.location.href = "../index/cambiarContraseña.php";</script>';
            } else {
                echo "Error al cambiar la contraseña: " . $conexion->error;
            }
        } else {
            echo "La nueva contraseña y la confirmación no coinciden.";
        }



?>