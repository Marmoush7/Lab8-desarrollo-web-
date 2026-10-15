<?php
require_once __DIR__ . '/../lib/estudiante.php';
$est = cargar_estudiante();

// Definición de variables con diferentes tipos de datos
$nombre_completo = $est['nombre'] . ' ' . $est['apellido'];
$edad = 19; // Tu edad actual
$promedio = 95.5;
$matriculado = true;

// Arreglo indexado de tecnologías web estudiadas
$tecnologias = ['HTML5', 'CSS3', 'JavaScript', 'PHP', 'SQL'];

// Arreglo asociativo con información de la asignatura
$asignatura = [
    'codigo' => 'WEB-2026',
    'nombre' => 'Desarrollo Web',
    'semestre' => 2
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lab 8 - Tipos y Arreglos</title>
</head>
<body>
    <h1>Tipos de Datos y Arreglos en PHP</h1>

    <h2>Información del Estudiante</h2>
    <p>Estudiante: <?= htmlspecialchars($nombre_completo); ?></p>
    <p>Edad: <?= $edad; ?> años (Tipo: <?= gettype($edad); ?>)</p>
    <p>Promedio: <?= $promedio; ?> (Tipo: <?= gettype($promedio); ?>)</p>
    <p>¿Está matriculado?: <?= $matriculado ? 'Sí' : 'No'; ?> (Tipo: <?= gettype($matriculado); ?>)</p>

    <h2>Tecnologías Web (Arreglo Indexado)</h2>
    <ul>
        <?php foreach ($tecnologias as $tech): ?>
            <li><?= htmlspecialchars($tech); ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Detalles de la Asignatura (Arreglo Asociativo)</h2>
    <p>Código: <?= htmlspecialchars($asignatura['codigo']); ?></p>
    <p>Asignatura: <?= htmlspecialchars($asignatura['nombre']); ?></p>
    <p>Semestre: <?= $asignatura['semestre']; ?></p>
</body>
</html>