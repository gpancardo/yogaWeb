<?php
include_once 'credenciales.php';

$telefono = $_POST['telefono'];
$password = $_POST['password'];

$conexion = new mysqli($host, $user, $pass, $name);

if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
}

$sql = "SELECT telefono FROM usuarios WHERE telefono = '$telefono' AND password = '$password'";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    session_start();
    $_SESSION['telefono'] = $telefono;
    header('Location: Principal.php');
    exit();
} else {
    header('Location: error.html');
    exit();
}

$conexion->close();
?>
