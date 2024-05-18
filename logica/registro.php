<?php
require 'conexion.php';

$nombre_usuario = $_POST['nombre_usuario'];
$password = $_POST['password'];
$edad = $_POST['edad'];
$telefono = $_POST['telefono'];
$progreso=0;

if ($conn) {
    $sql = "INSERT INTO usuarios (nombre_usuario, password, edad, telefono, progreso) VALUES ('$nombre_usuario', '$password', $edad, '$telefono', '$progreso')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: inicioSesion.html");
        exit();
    } else {
        header("Location: error.html");
        exit();
    }
    
    $conn->close();
} else {
    header("Location: error.html");
    exit();
}
?>
