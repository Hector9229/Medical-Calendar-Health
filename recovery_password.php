<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Calendar Health</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="">
        <link rel="icon" href="logoR.webp" type="image/x-icon">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
    <header>
        <div class="inicio">
          <button>
            <a href="home.html"><img src="logoR.webp" alt="logo">Medical Calendar Health</a>
          </button>
        </div>
    </header>
<body>
    <h2>Recuperar Contraseña</h2>
    <p>Para recuperar tu contraseña ayudanos ingresando los siguientes datos:</p><br>
    <form action="show_password.php" method="POST">
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" required><br>

        <label for="fechaNacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fechaNacimiento" name="fechaNacimiento" required><br>

        <button type="submit">Recuperar Contraseña</button>
    </form>
</body>
</html>
