<?php 
include("../php/conexion.php");
if($_SERVER['REQUEST_METHOD'] !='POST'){
    echo "<script> alert('Error: No hay datos para guardar.'); location.replace('./') </script>";
    $conexion->close();
    exit;
}
extract($_POST);
$allday = isset($allday);

if(empty($id)){
    $sql = "INSERT INTO `schedule_list` (`title`,`description`,`start_datetime`,`end_datetime`, `fecha`) VALUES ('$title','$description','$start_datetime','$end_datetime', '$fecha')";
}else{
    $sql = "UPDATE `schedule_list` set `title` = '{$title}', `description` = '{$description}', `start_datetime` = '{$start_datetime}', `end_datetime` = '{$end_datetime}' where `id` = '{$id}'";
}
$save = $conexion->query($sql);
if($save){
    header("location:index.php");
}else{
    echo "<pre>";
    echo "An Error occured.<br>";
    echo "Error: ".$conn->error."<br>";
    echo "SQL: ".$sql."<br>";
    echo "</pre>";
}
$conexion->close();
?>