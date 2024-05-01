<?php
$server = "localhost";
$usuario = "";
$contra = "";

$conn = new mysqli($server, $usuario, $contra);

if ($conn->connect_error) {
  die("Error: " . $conn->connect_error);
}
//Aquí debe ir una redirección a otra página
?>