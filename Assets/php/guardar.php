<?php 
include("conexion.php");
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
$id_rol = 1;

$validar = "SELECT * FROM cliente WHERE correo = '$correo'";
$validando = $conexion->query($validar);

if($validando->num_rows > 0){
    echo "Email ya registrado";
}else {

$query="INSERT INTO cliente (nombres, apellidos, telefono, correo, contraseña, id_rol) VALUES ('$nombres', '$apellidos', '$telefono', '$correo',  '$contraseña', '$id_rol')";
$resultado=$conexion->query($query);

if($resultado){
    header("Location:../index/index.php");
}else{
    echo "registro rechazado";
}
}
?>