<?php

    include('conexion.php');
    $conn = connection();

    include 'validar.php';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Calendar Health</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="login.css">
        <link rel="icon" href="logoR.webp" type="image/x-icon">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
    <header>
        <div class="inicio">
        <a href="home.php"><button>
            <img src="logoR.webp" alt="logo">Medical Calendar Health
          </button>
        </div></a>
    </header>
<body>
    <div class="contenedor-principal">
        <h1>Inicia Sesion para Continuar</h1>
        
        <form action="" method="post" class="formulario">
            <label for="Email">EMAIL</label>
            <input type="email" id="Email" name="Email" placeholder="usuario@gmail.com" required>

            <label for="Password">CONTRASEÑA</label>
            <input type="password" id="Password" name="Password" placeholder="********" required></input>

        <div class=links>
            <a href="recovery_password.php" class="forgot-password">Olvidaste tu contraseña?</a>
            <a href="register.php" class="register">Ya tienes cuenta?</a>
        </div>
        <div class=linkss>
            <button type="submit" name="boton" value='Iniciar'>Iniciar</button>
            </div>
        </form>
    </div>
    <!-- Mensaje en la esquina inferior derecha que lleva a doctor-->
    <div class="doctor-message">
        <p>¿Eres Doctor? <a href="medicos.php">Haz clic aquí</a></p>
    </div>
</body>
</html>