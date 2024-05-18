<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
</head>
<body >

<?php
session_start();
include "./logica/conexion.php";

$nombre_usuario= $_SESSION['usermane'];

if(!isset($nombre_usuario)){

    header("location: inicioSesion.html");

}else{
    $consulta_sql= "SELECT * FROM usuarios WHERE nombre_usuario='" .$nombre_usuario. "'";
    $resultado=$conexion->query($consulta_sql);
    $count=mysqli_num_rows($resultado);
    $row=mysqli_fetch_assoc($resultado);
?>

    <div class="container w-75 bg-dark mt-3 rounded shadow">
        <div class="row">
            <h1 style="color: white;" class="fw-bold text-center pt-4 mb-3"> Bienvenid@, <?php echo $row['nombre_usuario']; ?></h1> 
            <h5 style="color: white;" class="fw-bold text-center pt-2 mb-3">Salir del curso <a href='logica/salir.php'> Cerrar Sesión</a></h5>
        </div>
    </div>
<?php
    

}
?>
</body>
</html>