<?php
include("../php/conexion.php");
session_start();
$id = $_REQUEST['id'];
$nombres   = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$correo    = $_POST['correo'];
$telefono  = $_POST['telefono'];

$query="UPDATE cliente SET nombres='$nombres', apellidos='$apellidos', correo='$correo', telefono='$telefono' WHERE id ='$id'";
$resultado= $conexion->query($query);

if($resultado){
    echo '<script>alert("Informacion actualizada exitosamente"); window.location.href = "../index/verPerfil.php";</script>';
}else{
    echo "modificacion rechazada" . $conexion->error;
}

?>