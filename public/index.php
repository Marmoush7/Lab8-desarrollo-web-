<?php
// Estilo de comentario 1: Carga de dependencias del estudiante
# Estilo de comentario 2: Configuración de la zona horaria regional
/* Estilo de comentario 3:
   Bloque principal de inicialización de datos para la vista HTML */

require_once __DIR__ . '/../lib/estudiante.php'; // Carga la librería de estudiante
date_default_timezone_set('America/Panama'); // Fija la zona horaria oficial

$est = cargar_estudiante(); // Carga la información de estudiante.json
$fecha_actual = date('d/m/Y H:i'); // Genera la fecha actual en formato dd/mm/aaaa HH:mm
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!-- Define el título dinámico con el apellido usando echo -->
    <title>Lab 8 - <?php echo htmlspecialchars($est['apellido']); ?></title>
</head>
<body>
    <?php
    # Imprime el encabezado principal combinando nombre y apellido
    echo "<h1>" . htmlspecialchars($est['nombre'] . ' ' . $est['apellido']) . "</h1>";
    ?>
    
    <p>Versión de PHP: <?php print PHP_VERSION; ?></p> <!-- Muestra la versión de PHP usando print -->
    <p>Fecha y hora actual: <?= $fecha_actual; ?></p> <!-- Muestra la fecha horaria formateada -->
</body>
</html>