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
$consultar = "SELECT * FROM paciente WHERE id_Paciente = '$id_Paciente'";
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
    <title>Medical Calendar Health</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="logoR.webp" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<header>
<div class="inicio">
    <a href="home.php"><button><img src="logoR.webp" alt="logo">Medical Calendar Health</button></a>
    </div>
</header>   
<body>
    <h1>Crear cita</h1>
    <form action="insertCitas.php" method="post" class="was-validated">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="" placeholder="" name="Motivo" required>
                        <label for="email">Motivo</label>
                    </div>
                    <input type="hidden" name="id_Paciente" value="<?= htmlspecialchars($mostrar['id_Paciente']) ?>">
                    <div class="form-floating mt-3 mb-3">
                        <select name="Especialidad" id="" class="form-control" required>
                            <option disabled selected value></option>
                            <option value="Cardiologia">Cardiologia</option>
                            <option value="Pediatria">Pediatria</option>
                            <option value="Dermatologia">Cirujano</option>
                            <option value="Ginecologia">Ginecologia</option>
                            <option value="Neurologia">Neurologia</option>
                            <option value="Ofmatologia">Medicina general</option>
                            <option value="femenino">Psquiatria</option>
                            <option value="femenino">Endocrinologia</option>
                            
                        </select>
                        <label for="Especialidad">Especialidad</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                        <input type="text" class="form-control" id="" placeholder="" name="Nombre" required>
                        <label for="email">Doctor</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                        <input type="date" class="form-control" id="" placeholder="" name="Fecha" required>
                        <label for="email">Fecha de la cita</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                        <input type="time" class="form-control" id="" placeholder="" name="Hora" required>
                        <label for="email">Hora de la cita</label>
                    </div>
                </div>
                <button type="submit">Submit</button>
            </div>
        </div>
    </form>

</body>
</html>