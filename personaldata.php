<?php
session_start(); // Iniciar sesión
include('conexion.php');
$conn = connection();

if (!isset($_SESSION['id_Paciente'])) {
    header("Location: login.php"); // Redirigir si no hay sesión activa
    exit();
}

$id_Paciente = $_SESSION['id_Paciente'];

$consultar = "call consultarPaciente('$id_Paciente')";
$query = mysqli_query($conn, $consultar);

if ($query) {
    $mostrar = mysqli_fetch_array($query);
} else {
    echo "Error al obtener los datos del paciente.";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Personales</title>
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
                <li><a href="precitas.php"><button><i class="fi fi-rr-calendar"></i> Citas</button></a></li>
                <li><a href="logout.php"><button><i class="fi fi-rr-sign-out"></i> Cerrar Sesión</button></a></li>
            </ul>
        </nav>
    <section class="content">
    <h1>Datos Personales</h1>
        <form class="formulario" method="POST" action="modificar.php">
            <!-- Campo oculto para enviar el ID del paciente -->
            <input type="hidden" name="id_Paciente" value="<?= htmlspecialchars($mostrar['id_Paciente']) ?>">

            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="<?= htmlspecialchars($mostrar['nombre']) ?>">

            <label for="apellidos">Apellidos</label>
            <input type="text" id="apellidos" name="apellidos" value="<?= htmlspecialchars($mostrar['apellidos']) ?>">

            <label for="direccion">Dirección</label>
            <input type="text" id="direccion" name="direccion" value="<?= htmlspecialchars($mostrar['direccion']) ?>">

            <label for="celular">Número de Teléfono</label>
            <input type="text" id="celular" name="celular" value="<?= htmlspecialchars($mostrar['celular']) ?>">

            <label for="sexo">Sexo</label>
            <select id="sexo" name="sexo">
                <option value="Hombre" <?= $mostrar['sexo'] == 'Hombre' ? 'selected' : '' ?>>Hombre</option>
                <option value="Mujer" <?= $mostrar['sexo'] == 'Mujer' ? 'selected' : '' ?>>Mujer</option>
            </select>

            <label for="fechaNacimiento">Fecha de Nacimiento</label>
            <input type="date" id="fechaNacimiento" name="fechaNacimiento" value="<?= htmlspecialchars($mostrar['fechaNacimiento']) ?>">

            <label for="tipoSangre">Tipo de Sangre</label>
            <select id="tipoSangre" name="tipoSangre">
                <option value="O+" <?= $mostrar['tipoSangre'] == 'O+' ? 'selected' : '' ?>>O+</option>
                <option value="O-" <?= $mostrar['tipoSangre'] == 'O-' ? 'selected' : '' ?>>O-</option>
                <option value="A+" <?= $mostrar['tipoSangre'] == 'A+' ? 'selected' : '' ?>>A+</option>
                <option value="A-" <?= $mostrar['tipoSangre'] == 'A-' ? 'selected' : '' ?>>A-</option>
                <option value="B+" <?= $mostrar['tipoSangre'] == 'B+' ? 'selected' : '' ?>>B+</option>
                <option value="B-" <?= $mostrar['tipoSangre'] == 'B-' ? 'selected' : '' ?>>B-</option>
                <option value="AB+" <?= $mostrar['tipoSangre'] == 'AB+' ? 'selected' : '' ?>>AB+</option>
                <option value="AB-" <?= $mostrar['tipoSangre'] == 'AB-' ? 'selected' : '' ?>>AB-</option>
            </select>

            <label for="contactoEmergencia">No. Contacto de Emergencia</label>
            <input type="text" id="contactoEmergencia" name="no_ContacEmergencia" value="<?= htmlspecialchars($mostrar['no_ContacEmergencia']) ?>">

            <label for="alergias">Alergias</label>
            <input type="text" id="alergias" name="alergias" value="<?= htmlspecialchars($mostrar['alergias']) ?>">

            <label for="cirugiasAccidentes">Cirugías o Accidentes</label>
            <input type="text" id="cirugiasAccidentes" name="cirugias_Acci" value="<?= htmlspecialchars($mostrar['cirugias_Acci']) ?>">

            <label for="medicamentosActuales">Medicamentos Actuales</label>
            <input type="text" id="medicamentosActuales" name="Medicamentos_act" value="<?= htmlspecialchars($mostrar['Medicamentos_act']) ?>">

            <label for="enfermedades">Enfermedades</label>
            <input type="text" id="enfermedades" name="enfermedades" value="<?= htmlspecialchars($mostrar['enfermedades']) ?>">

            <label for="estatura">Estatura (m)</label>
            <input type="text" id="estatura" name="estatura" value="<?= htmlspecialchars($mostrar['estatura']) ?>">

            <label for="peso">Peso (kg)</label>
            <input type="text" id="peso" name="peso" value="<?= htmlspecialchars($mostrar['peso']) ?>">

            <button type="submit">Guardar y Actualizar</button>
        </form>
    </section>
    </div>
</body>
</html>
