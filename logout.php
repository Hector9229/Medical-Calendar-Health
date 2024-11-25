<?php
session_start(); // Iniciar sesión

// Destruir la sesión
session_unset(); // Limpiar las variables de sesión
session_destroy(); // Destruir la sesión actual

// Redirigir al login
header("Location: login.php");
exit();
?>
