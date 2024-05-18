<?php
include 'credenciales.php';

$host_db=$host;
$user_db=$user;
$pass_db=$pass;
$name_db=$name;

$conexion = new mysqli($host_db,$user_db,$pass_db,$name_db);

if($conexion->connect_error){
    header("Location: ../error.html");
    
}else{
    
} 
?>