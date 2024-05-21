<?php
session_start();

include 'credenciales.php';

if (!isset($_SESSION['telefono'])) {
    header('Location: inicioSesion.html');
    exit();
}

$telefono = $_SESSION['telefono'];

// Función para incrementar el progreso del usuario
function incrementarProgreso($telefono) {
    include 'credenciales.php'; // Incluir credenciales dentro de la función

    // Conectar a la base de datos
    $conn = new mysqli($host, $user, $pass, $name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE usuarios SET progreso = progreso + 1 WHERE telefono = '$telefono'";
    $result = $conn->query($sql);
    
    if ($result === TRUE) {
        $conn->close();
        return true;
    } else {
        $conn->close();
        return false;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['incrementar'])) {
    if (incrementarProgreso($telefono)) {
        header('Location: principal.php');
        exit();
    } else {
        echo "Error al incrementar el progreso.";
    }
}

$conn = new mysqli($host, $user, $pass, $name);

if ($conn->connect_error) {
    header('Location: error.html');
    exit();
}

$sql = "SELECT progreso FROM usuarios WHERE telefono = '$telefono'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $progreso = $row['progreso'];
} else {
    header('Location: error.html');
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yogaweb</title>
</head>
<body>
    <?php
    if ($progreso == 0) {
        echo '<video width="320" height="240" controls>
                <source src="otro.mp4" type="video/mp4">
                Tu navegador no soporta este tipo de vídeo, intenta con otro navegador o en otro dispositivo.
              </video>';
        echo '<p><b>Hirshasana</b></p>';
        echo '<p>Esta postura invertida también se conoce como el "rey de las asanas" porque esta postura de yoga se considera un maestro en la curación de muchas enfermedades. Shirshasana es una de las asanas más efectivas para el cuerpo y la mente.</p>';
        echo'<form action="principal.php" method="post">
        <button class="btn" type="submit" name="incrementar">Incrementar Progreso</button>
    </form>';
    } elseif ($progreso == 1) {
        echo '<video width="320" height="240" controls>
                <source src="rayas.mp4" type="video/mp4">
                Tu navegador no soporta este tipo de vídeo, intenta con otro navegador o en otro dispositivo.
              </video>';
        echo '<p><b>Ardha Baddha Padmottanasana</b></p>';
        echo '<p>Ardha es un término sánscrito que se traduce como «medio», baddha significa «atado», padma «loto» y uttana quiere decir «estiramiento intenso». En esta variante de Vrkasana, es necesario tener entrenado el medio loto y la postura del árbol.</p>';
        echo'<form action="principal.php" method="post">
        <button class="btn" type="submit" name="incrementar">Incrementar Progreso</button>
    </form>';
    } elseif ($progreso == 2) {
        echo '<video width="320" height="240" controls>
                <source src="rosa.mp4" type="video/mp4">
                Tu navegador no soporta este tipo de vídeo, intenta con otro navegador o en otro dispositivo.
              </video>';
        echo '<p><b>Astangasana & Shirshasana</b></p>';
        echo '<p>En sánscrito, ashta significa ocho y anga significa parte. De ahí que en Ashtanga Namaskar, el cuerpo esté en contacto con el suelo (como muestra de respeto) en ocho puntos, que son: los dos pies, las dos rodillas, las dos manos, el pecho y la barbilla. En la postura de Shirshasana se apoyan los antebrazos, las manos y la cabeza en el suelo, quedando el tronco y las piernas en vertical.</p>';
        echo'<form action="principal.php" method="post">
        <button class="btn" type="submit" name="incrementar">Incrementar Progreso</button>
    </form>';
    } elseif ($progreso == 3) {
        echo '<video width="320" height="240" controls>
                <source src="Tito.mp4" type="video/mp4">
                Tu navegador no soporta este tipo de vídeo, intenta con otro navegador o en otro dispositivo.
              </video>';
        echo '<p><b>Cuenco alquímico</b></p>';
        echo '<p>Curado con la energía de la Madre Ballena de esta Tierra, este cuenco ha estado por Selvas, ríos y mares, es el encargado de mover las aguas que conforman tus cuerpos sutiles.</p>';
        echo'<form action="principal.php" method="post">
        <button class="btn" type="submit" name="incrementar">Incrementar Progreso</button>
    </form>';
    } else {
        header('Location: exito.html');
        exit();
    }
    ?>

    <p>Progreso: <?php echo ($progreso * 25); ?>%</p>
</body>
</html>