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

// Consultar las citas del paciente
$consultaCitas = "call mostrarCitasPaciente('$id_Paciente')";
$queryCitas = mysqli_query($conn, $consultaCitas);

if (!$queryCitas) {
    echo "Error al obtener las citas del paciente.";
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="logoR.webp" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<header>
    <div class="inicio">
    <a href="home.html"><button><img src="logoR.webp" alt="logo">Medical Calendar Health</button></a>
    </div>
</header>
<body>
<div class="main-container">
    <nav class="sidebar">
        <ul>
            <li><a href="profile.php"><button><i class="fi fi-rr-user"></i> Perfil</button></a></li>
            <li><a href="personaldata.php"><button><i class="fi fi-rr-file"></i> Datos Personales</button></a></li>
            <li><a href="citas.php"><button><i class="fi fi-rr-calendar"></i> Citas</button></a></li>
            <li><a href="logout.php"><button><i class="fi fi-rr-sign-out"></i> Cerrar Sesión</button></a></li>
        </ul>
    </nav>
    <section class="content">
        <h1>Mis Citas</h1>
        <div class="d-flex justify-content-between mb-3">
            <button class="btn btn-primary" onclick="location.href='citas.php'">Agregar Cita</button>
            <button class="btn btn-danger" onclick="location.href='cancelarCita.php'">Cancelar Cita</button>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Motivo</th>
                    <th>Estado</th>
                    <th>Médico</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($fila = mysqli_fetch_assoc($queryCitas)) { ?>
                    <tr>
                        <td><?= htmlspecialchars($fila['fecha']) ?></td>
                        <td><?= htmlspecialchars($fila['hora']) ?></td>
                        <td><?= htmlspecialchars($fila['motivo']) ?></td>
                        <td><?= htmlspecialchars($fila['estado']) ?></td>
                        <td><?= htmlspecialchars($fila['medico']) ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>
</div>
</body>
</html>
