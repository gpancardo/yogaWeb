<?php
include_once 'credenciales.php';

$nombre = $_POST['nombre'];
$num = $_POST['num'];
$edad = $_POST['edad'];
$password = $_POST['password'];

$conexion = new mysqli($host, $user, $pass, $name);

if ($conexion->connect_error) {
    header('Location: ../error.html');
    exit();
}

$sql = "INSERT INTO usuarios (nombre_usuario, telefono, edad, password) VALUES ('$nombre', '$num', '$edad', '$password')";

if ($conexion->query($sql) === TRUE) {
    header('Location: ../index.html');
    exit();
} else {
    header('Location: ../error.html');
    exit();
}

$conexion->close();
?>
