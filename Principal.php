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
        header('Location: Principal.php');
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
    <link rel="shortcut icon" href="imagenes/faviconYoga.png" type="image/x-icon">
    <title>Yogaweb</title>
</head>
<body>
    <header>
        <h1>Yogaweb</h1>
    </header>
    <div class="container">
        <?php
        if ($progreso == 0) {
            echo '<div class="content">
                    <div class="video-container">
                    <video width="320" height="240" controls>
                            <source src="videos/otro.mp4" type="video/mp4">
                            Tu navegador no soporta este tipo de vídeo, intenta con otro navegador o en otro dispositivo.
                        </video>
                    <p><b>Hirshasana</b></p>
                    <p>Esta postura invertida también se conoce como el "rey de las asanas" porque esta postura de yoga se considera un maestro en la curación de muchas enfermedades. Shirshasana es una de las asanas más efectivas para el cuerpo y la mente.</p>
                    <form action="Principal.php" method="post">
                        <button class="btn" type="submit" name="incrementar">Incrementar Progreso</button>
                    </form>
                  </div>';
        } elseif ($progreso == 1) {
            echo '<div class="content">
                    <div class="video-container">
                        <video width="320" height="240" controls>
                            <source src="videos/rayas.mp4" type="video/mp4">
                            Tu navegador no soporta este tipo de vídeo, intenta con otro navegador o en otro dispositivo.
                        </video>
                    </div>
                    <p><b>Ardha Baddha Padmottanasana</b></p>
                    <p>Ardha es un término sánscrito que se traduce como «medio», baddha significa «atado», padma «loto» y uttana quiere decir «estiramiento intenso». En esta variante de Vrkasana, es necesario tener entrenado el medio loto y la postura del árbol.</p>
                    <form action="Principal.php" method="post">
                        <button class="btn" type="submit" name="incrementar">Incrementar Progreso</button>
                    </form>
                  </div>';
        } elseif ($progreso == 2) {
            echo '<div class="content">
                    <div class="video-container">
                        <video width="320" height="240" controls>
                            <source src="videos/rosa.mp4" type="video/mp4">
                            Tu navegador no soporta este tipo de vídeo, intenta con otro navegador o en otro dispositivo.
                        </video>
                    </div>
                    <p><b>Astangasana & Shirshasana</b></p>
                    <p>En sánscrito, ashta significa ocho y anga significa parte. De ahí que en Ashtanga Namaskar, el cuerpo esté en contacto con el suelo (como muestra de respeto) en ocho puntos, que son: los dos pies, las dos rodillas, las dos manos, el pecho y la barbilla. En la postura de Shirshasana se apoyan los antebrazos, las manos y la cabeza en el suelo, quedando el tronco y las piernas en vertical.</p>
                    <form action="Principal.php" method="post">
                        <button class="btn" type="submit" name="incrementar">Incrementar Progreso</button>
                    </form>
                  </div>';
        } elseif ($progreso == 3) {
            echo '<div class="content">
                    <div class="video-container">
                        <video width="320" height="240" controls>
                            <source src="videos/Tito.mp4" type="video/mp4">
                            Tu navegador no soporta este tipo de vídeo, intenta con otro navegador o en otro dispositivo.
                        </video>
                    </div>
                    <p><b>Cuenco alquímico</b></p>
                    <p>Curado con la energía de la Madre Ballena de esta Tierra, este cuenco ha estado por Selvas, ríos y mares, es el encargado de mover las aguas que conforman tus cuerpos sutiles.</p>
                    <form action="Principal.php" method="post">
                        <button class="btn" type="submit" name="incrementar">Incrementar Progreso</button>
                    </form>
                  </div>';
        } else {
            header('Location: exito.html');
            exit();
        }
        ?>
        <p>Progreso: <?php echo ($progreso * 25); ?>%</p>
    </div>
    <footer>
        Yogaweb - 2024 - México
    </footer>
</body>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            color: #333;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        header {
            background: #898686;
            color: white;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #2980b9 3px solid;
        }
        header h1 {
            text-align: center;
            text-transform: uppercase;
            margin: 0;
            font-size: 24px;
        }
        .video-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px 0;
        }
        video {
            border: 2px solid #5f9ea0;
            border-radius: 10px;
        }
        .btn {
            display: inline-block;
            color: #000000;
            background: #F5F2C0;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .btn:hover {
            background: #2DE5CE;
        }
        .content {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        footer {
            background: #898686;
            color: white;
            padding: 10px 0;
            width: 100%;
            bottom: 0;
            text-align: center;
        }
</style>
</html>