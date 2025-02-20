<?php
session_start();
session_destroy(); // Destruir la sesión
header('Location: main.php?page=login'); // Redirigir al login
exit();
?>