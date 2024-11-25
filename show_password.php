<?php

    include ('conexion.php');
    $conn = connection();

    // Obtener los datos del formulario
    $email = $_POST['email'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $fechaNacimiento = $_POST['fechaNacimiento'];

    // Buscar al usuario en la base de datos
    $sql = "SELECT password FROM paciente WHERE email = ? AND nombre = ? AND apellidos = ? AND fechaNacimiento = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $email, $nombre, $apellidos, $fechaNacimiento);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Mostrar la contraseña
        $row = $result->fetch_assoc();
        echo "Tu contraseña es: " . htmlspecialchars($row['password']);
    } else {
        echo "No se encontraron datos que coincidan con la información proporcionada.";
    }

$conn->close();
?>