<?php
session_start();
include('conexion.php'); // Incluir conexión a la base de datos
$conn = connection();

// Verificar si la sesión está activa
if (!isset($_SESSION['id_Paciente'])) {
    header("Location: login.php"); // Redirigir al login si no hay sesión
    exit();
}

$id_Paciente = $_SESSION['id_Paciente'];

// Consultar los datos del paciente
$consultar = "call consultarPaciente('$id_Paciente')";
$query = mysqli_query($conn, $consultar);

if ($query) {
    $mostrar = mysqli_fetch_array($query); // Obtener los datos como un arreglo
} else {
    echo "Error al obtener los datos del paciente.";
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="logoR.webp" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<header>
    <div class="inicio">
        <a href="home.php"><button>
            <img src="logoR.webp" alt="logo">Medical Calendar Health
        </button></a>
    </div>
</header>
<body>
<div class="main-container">
    <nav class="sidebar">
        <ul>
            <li><a href="profile.php"><button><i class="fi fi-rr-user"></i> Perfil</button></a></li>
            <li><a href="personaldata.php"><button><i class="fi fi-rr-file"></i> Datos Personales</button></a></li>
            <li><a href="precitas.php"><button><i class="fi fi-rr-calendar"></i> Citas</button></a></li>
            <li><a href="logout.php"><button><i class="fi fi-rr-sign-out"></i> Cerrar Sesión</button></a></li>
        </ul>
    </nav>
    <section class="content">
        <h1>Perfil del Paciente</h1>
        <div class="profile-details">
            <p><strong>Nombre:</strong> <?= htmlspecialchars($mostrar['nombre'] . ' ' . $mostrar['apellidos']) ?></p>
            <p><strong>Correo Electrónico:</strong> <?= htmlspecialchars($mostrar['email']) ?></p>
            <p><strong>Sexo:</strong> <?= htmlspecialchars($mostrar['sexo']) ?></p>
            <p><strong>Estatura:</strong> <?= htmlspecialchars($mostrar['estatura']) ?> m</p>
            <p><strong>Peso:</strong> <?= htmlspecialchars($mostrar['peso']) ?> kg</p>
            <p><strong>Alergias:</strong> <?= htmlspecialchars($mostrar['alergias']) ?></p>
            <p><strong>Enfermedades:</strong> <?= htmlspecialchars($mostrar['enfermedades']) ?></p>
            <p><strong>Tipo de Sangre:</strong> <?= htmlspecialchars($mostrar['tipoSangre']) ?></p>
            <p><strong>Medicamentos Actuales:</strong> <?= htmlspecialchars($mostrar['Medicamentos_act']) ?></p>
        </div>
    </section>
</div>
</body>
</html>
