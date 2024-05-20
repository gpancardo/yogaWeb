<?php
include_once 'credenciales.php';

$nombre = $_POST['nombre'];
$num = $_POST['num'];
$edad = $_POST['edad'];
$password = $_POST['password'];

$hasheado = password_hash($password, PASSWORD_DEFAULT);

$conexion = new mysqli($host, $user, $pass, $name);

// Check connection
if ($conexion->connect_error) {
    header('Location: error.html');
    exit();
}

$nombre = $conexion->real_escape_string($nombre);
$num = $conexion->real_escape_string($num);
$edad = (int)$edad;
$hasheado = $conexion->real_escape_string($hasheado);

$sql = "INSERT INTO usuarios (nombre_usuario, telefono, edad, password) VALUES ('$nombre', '$num', '$edad', '$hasheado')";

if ($conexion->query($sql) === TRUE) {
    header('Location: index.html');
    exit();
} else {
    header('Location: error.html');
    exit();
}

$conexion->close();
?>
