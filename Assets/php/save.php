<?php
session_start();
include("../php/conexion.php");
$id = $_GET['id'];
$nombre=$_POST['nombre'];
$tamaño=$_POST['tamaño'];
$ubicacion=$_POST['ubicacion'];
$hora_inicio=$_POST['hora_inicio'];
$hora_fin=$_POST['hora_fin'];
$superficie=$_POST['superficie'];
$id_cliente = $_SESSION['id'];

$foto=addslashes(file_get_contents($_FILES['foto']['tmp_name']));

$query="INSERT INTO cancha ( nombre, tamaño, ubicacion, hora_inicio, hora_fin, superficie, foto, id_cliente) VALUES ( '$nombre', '$tamaño', '$ubicacion', '$hora_inicio', '$hora_fin', '$superficie', '$foto', '$id_cliente')";
$resultado=$conexion->query($query); 

if($resultado){
    $query="UPDATE cliente SET id_rol= '2'  WHERE id='$id_cliente' ";
    $resultado= $conexion->query($query); 
    header("location:../php/miCancha.php");
}else{
    echo "registo rechazado";
}

?>


