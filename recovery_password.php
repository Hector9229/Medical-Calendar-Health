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
          </button></a>
        </div>
    </header>
<body>
    <div class=contenedor-principal>
        <h2>Recuperar Contraseña</h2>
        <p>Para recuperar tu contraseña ayudanos ingresando los siguientes datos:</p><br>
        <form action="show_password.php" method="POST">
            <div class="form-floating mt-3 mb-3">
                <input type="text" class="form-control" id="" placeholder="" name="email" required>
                <label for="email">Correo Electronico</label>
            </div>
            <div class="form-floating mb-3 mt-3">
                <input type="text" class="form-control" id="" placeholder="" name="nombre" required>
                <label for="nombre">Nombre</label>
            </div>
            <div class="form-floating mt-3 mb-3">
                <input type="text" class="form-control" id="" placeholder="" name="apellidos" required>
                <label for="apellidos">Apellidos</label>
            </div>

            <div class="form-floating mt-3 mb-3">
                <input type="date" class="form-control" id="" placeholder="" name="fechaNacimiento" required>
                <label for="fechaNacimiento">Fecha de nacimiento</label>
            </div>
            <button type="submit">Recuperar Contraseña</button>
        </form>
    </div>
</body>
</html>
