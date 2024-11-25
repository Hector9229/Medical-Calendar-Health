<?php
session_start();

if (!empty($_POST["boton"])) { // Verificar si se presionó el botón
    if (!empty($_POST["Email"]) && !empty($_POST["Password"])) { // Verificar campos
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];

        // Llama al procedimiento almacenado
        $sql = $conn->query("call autentificarPaciente ('{$Email}', '{$Password}')");

        // Verificar si se obtuvieron datos
        if ($datos = $sql->fetch_object()) {
            $_SESSION["id_Paciente"] = $datos->id_Paciente; // Guardar el ID del paciente en sesión
            $_SESSION["Email"] = $datos->Email;
            $_SESSION["Password"] = $datos->Password; 

            header("Location: profile.php"); // Redirigir al perfil
            exit();
        } else {
            echo "Usuario o contraseña incorrectos";
        }
    } else {
        echo "Por favor, completa todos los campos.";
    }
}
?>
