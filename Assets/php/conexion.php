<?php
$conexion= new mysqli("localhost","root","","spot");
$conexion-> set_charset("utf8");
if ($conexion){
    //echo "Conexion exitosita";
}

else{
    // echo "no exitosita";
}

?>