<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['nombre'] = $_POST['nombre'];
    $_SESSION['edad'] = $_POST['edad'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Examen</h2>
                        <form action="resultado.php" method="post">
                            <!-- Pregunta 1 -->
                            <div class="mb-3">
                                <p><strong>Pregunta 1:</strong> ¿Cuál es la capital de Francia?</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pregunta1" value="correcto" required>
                                    <label class="form-check-label">París</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pregunta1" value="incorrecto">
                                    <label class="form-check-label">Roma</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pregunta1" value="incorrecto">
                                    <label class="form-check-label">Londres</label>
                                </div>
                            </div>

                            <!-- Pregunta 2 -->
                            <div class="mb-3">
                                <p><strong>Pregunta 2:</strong> ¿Cuánto es 5 + 5?</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pregunta2" value="incorrecto" required>
                                    <label class="form-check-label">8</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pregunta2" value="incorrecto">
                                    <label class="form-check-label">12</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pregunta2" value="correcto">
                                    <label class="form-check-label">10</label>
                                </div>
                            </div>

                            <!-- Pregunta 3 -->
                            <div class="mb-3">
                                <p><strong>Pregunta 3:</strong> ¿Cuál es el planeta más cercano al sol?</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pregunta3" value="incorrecto" required>
                                    <label class="form-check-label">Júpiter</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pregunta3" value="correcto">
                                    <label class="form-check-label">Mercurio</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pregunta3" value="incorrecto">
                                    <label class="form-check-label">Marte</label>
                                </div>
                            </div>

                            <!-- Pregunta 4 -->
                            <div class="mb-3">
                                <p><strong>Pregunta 4:</strong> ¿Cuántos continentes hay en la Tierra?</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pregunta4" value="incorrecto" required>
                                    <label class="form-check-label">5</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pregunta4" value="correcto">
                                    <label class="form-check-label">7</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pregunta4" value="incorrecto">
                                    <label class="form-check-label">6</label>
                                </div>
                            </div>

                            <!-- Pregunta 5 -->
                            <div class="mb-3">
                                <p><strong>Pregunta 5:</strong> ¿Cuál es el animal más rápido del mundo?</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pregunta5" value="incorrecto" required>
                                    <label class="form-check-label">Águila</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pregunta5" value="incorrecto">
                                    <label class="form-check-label">León</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pregunta5" value="correcto">
                                    <label class="form-check-label">Guepardo</label>
                                </div>
                            </div>

                            <!-- Pregunta 6 -->
                            <div class="mb-3">
                                <p><strong>Pregunta 6:</strong> ¿Cuántos lados tiene un hexágono?</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pregunta6" value="incorrecto" required>
                                    <label class="form-check-label">5</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pregunta6" value="correcto">
                                    <label class="form-check-label">6</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pregunta6" value="incorrecto">
                                    <label class="form-check-label">8</label>
                                </div>
                            </div>

                            <!-- Pregunta 7 -->
                            <div class="mb-3">
                                <p><strong>Pregunta 7:</strong> ¿Cuál es el metal más ligero?</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pregunta7" value="incorrecto" required>
                                    <label class="form-check-label">Oro</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pregunta7" value="incorrecto">
                                    <label class="form-check-label">Plata</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pregunta7" value="correcto">
                                    <label class="form-check-label">Litio</label>
                                </div>
                            </div>

                            <!-- Pregunta 8 -->
                            <div class="mb-3">
                                <p><strong>Pregunta 8:</strong> ¿Qué año terminó la Segunda Guerra Mundial?</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pregunta8" value="incorrecto" required>
                                    <label class="form-check-label">1940</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pregunta8" value="incorrecto">
                                    <label class="form-check-label">1939</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pregunta8" value="correcto">
                                    <label class="form-check-label">1945</label>
                                </div>
                            </div>

                            <!-- Pregunta 9 -->
                            <div class="mb-3">
                                <p><strong>Pregunta 9:</strong> ¿Cuál es el río más largo del mundo?</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pregunta9" value="incorrecto" required>
                                    <label class="form-check-label">Nilo</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pregunta9" value="correcto">
                                    <label class="form-check-label">Amazonas</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pregunta9" value="incorrecto">
                                    <label class="form-check-label">Misisipi</label>
                                </div>
                            </div>

                            <!-- Pregunta 10 -->
                            <div class="mb-3">
                                <p><strong>Pregunta 10:</strong> ¿Cuál es el idioma más hablado en el mundo?</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pregunta10" value="correcto" required>
                                    <label class="form-check-label">Chino</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pregunta10" value="incorrecto">
                                    <label class="form-check-label">Inglés</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pregunta10" value="incorrecto">
                                    <label class="form-check-label">Español</label>
                                </div>
                            </div>

                            <!-- Botón de envío -->
                            <div class="text-center">
                                <input type="submit" value="Terminar Examen" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
