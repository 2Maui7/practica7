<?php
session_start();

// Conectar a la base de datos
$conn = new mysqli('localhost', 'root', '', 'examen_db');
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar respuestas
$correctas = 0;
for ($i = 1; $i <= 10; $i++) {
    if ($_POST["pregunta$i"] == 'correcto') {
        $correctas++;
    }
}

// Definir si está aprobado
$aprobado = $correctas >= 7 ? 1 : 0;

// Insertar datos en la base de datos
$nombre = $_SESSION['nombre'];
$edad = $_SESSION['edad'];
$stmt = $conn->prepare("INSERT INTO usuarios (nombre, edad, aprobado) VALUES (?, ?, ?)");
$stmt->bind_param("sii", $nombre, $edad, $aprobado);
$stmt->execute();
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Examen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Resultado del Examen</h2>
                        <p class="text-center fs-4">
                            <?php if ($aprobado): ?>
                                ¡Felicidades, has aprobado el examen!
                            <?php else: ?>
                                Lo siento, no has aprobado el examen.
                            <?php endif; ?>
                        </p>
                        <div class="text-center">
                            <a href="index.php" class="btn btn-primary">Volver al inicio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

