<?php
require 'conexion.php';
session_start();

$nombre_usuario = $_POST['nombre_usuario'];
$password = $_POST['password'];

$q = "SELECT COUNT(*) as contar from usuarios where nombre_usuario= '$nombre_usuario' and password = '$password'";

$consulta = mysqli_query($conexion, $q);

$array = mysqli_fetch_array($consulta);

if ($array['contar'] > 0) {

    $_SESSION['usermane'] = $nombre_usuario;

    header("Location: ../principal.php");
} else {

    header("Location: ../error.html");
}
?>
