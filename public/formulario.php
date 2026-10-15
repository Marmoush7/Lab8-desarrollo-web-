<?php
require_once __DIR__ . '/../lib/estudiante.php';
$est = cargar_estudiante();

$mensaje = '';
$datos_recibidos = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $asunto = trim($_POST['asunto'] ?? '');
    $comentario = trim($_POST['comentario'] ?? '');
    $metodo_usado = $_POST['metodo'] ?? 'POST';

    if ($asunto !== '' && $comentario !== '') {
        $mensaje = "¡Formulario procesado correctamente mediante el método " . htmlspecialchars($metodo_usado) . "!";
        $datos_recibidos = [
            'asunto' => $asunto,
            'comentario' => $comentario,
            'metodo' => $metodo_usado,
            'hora' => date('d/m/Y H:i:s')
        ];
    } else {
        $mensaje = "Por favor, completa todos los campos del formulario.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lab 8 - Formulario y Métodos</title>
</head>
<body>
    <h1>Formulario de Contacto - <?= htmlspecialchars($est['nombre'] . ' ' . $est['apellido']); ?></h1>

    <?php if ($mensaje !== ''): ?>
        <p style="color: blue; font-weight: bold;"><?= htmlspecialchars($mensaje); ?></p>
    <?php endif; ?>

    <form action="formulario.php" method="POST">
        <input type="hidden" name="metodo" value="POST">

        <label for="asunto">Asunto:</label><br>
        <input type="text" id="asunto" name="asunto" required><br><br>

        <label for="comentario">Comentario o Mensaje:</label><br>
        <textarea id="comentario" name="comentario" rows="4" cols="40" required></textarea><br><br>

        <button type="submit">Enviar por POST</button>
    </form>

    <?php if ($datos_recibidos): ?>
        <h2>Datos Recibidos:</h2>
        <p><strong>Asunto:</strong> <?= htmlspecialchars($datos_recibidos['asunto']); ?></p>
        <p><strong>Comentario:</strong> <?= htmlspecialchars($datos_recibidos['comentario']); ?></p>
        <p><strong>Método HTTP:</strong> <?= htmlspecialchars($datos_recibidos['metodo']); ?></p>
        <p><strong>Fecha y Hora:</strong> <?= htmlspecialchars($datos_recibidos['hora']); ?></p>
    <?php endif; ?>
</body>
</html>