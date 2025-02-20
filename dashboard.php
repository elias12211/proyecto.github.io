<?php
// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['username'])) {
    header('Location: main.php?page=login'); // Redirigir al login si no hay sesión
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
    <div class="sidebar">
        <h2>Panel de Control</h2>
        <a href="main.php?page=dashboard">Inicio</a>
        <a href="#">Perfil</a>
        <a href="#">Configuración</a>
        <a href="main.php?page=logout">Cerrar Sesión</a>
    </div>
    <div class="main-content">
        <h1>Bienvenido, <?php echo htmlspecialchars($username); ?></h1>
        <div class="cards">
            <div class="card">
                <h3>Resumen de Asistencia</h3>
                <p>Entradas: 1</p>
                <p>Salidas: 0</p>
                <p>Horas trabajadas: 8</p>
            </div>
        </div>
        <div class="quick-access">
            <div>
                <i>📅</i>
                <p>Registrar Entrada/Salida</p>
            </div>
            <div>
                <i>⏰</i>
                <p>Ver Horarios</p>
            </div>
            <div>
                <i>📝</i>
                <p>Solicitar Ausencia</p>
            </div>
            <div>
                <i>📊</i>
                <p>Generar Reportes</p>
            </div>
        </div>
        <div class="notifications">
            <h3>Notificaciones</h3>
            <p>No tienes notificaciones nuevas.</p>
        </div>
    </div>
</body>
</html>