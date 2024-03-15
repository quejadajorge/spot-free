<?php
include("../php/conexion.php");
session_start();
// Conexión a la base de datos (ajusta los valores según tu configuración)
$conexion = new mysqli("localhost", "root", "", "spot");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Procesar los checkboxes
if (isset($_POST['opcion'])) {
    $opcion  = $_POST['opcion'];
    $fecha   = $_POST['fecha'];
    $nombres = $_POST['nombres'];
    $id= $_POST['id'];
    $id_cliente = $_SESSION['id'];
    

    // Iterar sobre cada opción seleccionada
    foreach ($opcion as $opcion) {
        // Insertar en la base de datos (ajusta la consulta según tu estructura)
        $query = "INSERT INTO reservas (opcion, fecha, nombres, id, id_cliente) VALUES ('$opcion', '$fecha', '$nombres', '$id', '$id_cliente')";
        $resultado = $conexion->query($query);

        if (!$resultado) {
            echo "Error al guardar datos: " . $conexion->error;
            break;  // Sale del bucle si hay un error
        }
    }
    
    
    header("location:../php/verifyreserva.php");
}

// Cerrar la conexión
$conexion->close();
?>
