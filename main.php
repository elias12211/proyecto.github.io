<?php
session_start();

// Manejo de rutas para login deshboard y logout
$page = isset($_GET['page']) ? $_GET['page'] : 'login';

switch ($page) {
    case 'login':
        include 'login.php';
        break;
    case 'dashboard':
        include 'dashboard.php';
        break;
    case 'logout':
        include 'logout.php';
        break;
    default:
        include 'login.php';
        break;
}
?>