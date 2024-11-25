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
    <div class="final">
    <a href="login.php"><button>Login</button></a>
    <a href="register.php"><button>Register</button></a>
    </div>
</header>
<body>
    <div class="sidebar">
        <ul>
            <a href="servicios.php"><button><li><i><i class="fi fi-rr-book-alt"></i> Servicios</i></li></button></a>
            <a href="medicos.php"><button><li><i><i class="fi fi-rr-users-alt"></i> Medicos</i></li></button></a>
            <a href="cirugias.php"><button><li><i><i class="fi fi-rr-hand-holding-heart"></i> Cirugías</i></li></button></a>
            <a href="citas.php"><button><li><i><i class="fi fi-rr-calendar-lines"></i> Citas</i></li></button></a>
        </ul>
    </div>

    <div class="content">
        

        <div class="main-image">
            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>
              
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="estetoscopio.webp" alt="Los Angeles" class="d-block w-100">
                  </div>
                  <div class="carousel-item">
                    <img src="estetoscopio.webp" alt="Chicago" class="d-block w-100">
                  </div>
                  <div class="carousel-item">
                    <img src="estetoscopio.webp" alt="New York" class="d-block w-100">
                  </div>
                </div>
              
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                  <i class="fi fi-rr-angle-left"></i>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                  <i class="fi fi-rr-angle-right"></i>
                </button>
              </div>
        
        <div class="welcome-text">
            <h2>Bienvenido</h2>
            <p>Organiza y gestiona tus citas médicas de manera eficiente y sin complicaciones. Nuestra plataforma está diseñada para facilitar la coordinación entre pacientes, médicos y personal de apoyo, brindando una solución integral para la administración de citas y el seguimiento de la información de cada paciente.</p>
        </div>
    </div>
</body>
</html>
