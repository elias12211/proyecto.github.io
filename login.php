<?php
// Simulación de validación de usuario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validación básica (en un caso real, usarías una base de datos)
    if ($username === 'admin' && $password === '1234') {
        $_SESSION['username'] = $username;
        header('Location: main.php?page=dashboard'); // Redirigir al dashboard
        exit();
    } else {
        $error = "Usuario o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
    <div class="login-form">
        <img src="assets/logo.jpeg" alt="Logo de la empresa"> <!-- Logo de la empresa -->
        <h2>Iniciar Sesión</h2>
        <?php if (isset($error)): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
        <form action="main.php?page=login" method="POST">
            <input type="text" name="username" placeholder="Nombre de usuario" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Iniciar Sesión</button>
        </form>
        <a href="#">¿Olvidaste tu contraseña?</a>
    </div>
</body>
</html>