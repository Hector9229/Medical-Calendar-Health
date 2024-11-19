<?php
    include ('conexion.php');
    $conn = connection();
?>
<!DOCTYPE html>
<html lang="en">
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
    <h1>Area de Registro</h1>
    <form action="registro.php" method="post" class="was-validated">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="" placeholder="" name="nombre" required>
                        <label for="nombre">Nombre(s)</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                        <input type="text" class="form-control" id="" placeholder="" name="apellidos" required>
                        <label for="apellidos">Apellido(s)</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                        <input type="text" class="form-control" id="" placeholder="" name="email" required>
                        <label for="email">Email</label>
                    </div>
                    
                    <div class="form-floating mt-3 mb-3">
                        <input type="text" class="form-control" id="" placeholder="" name="celular" required>
                        <label for="celular">Celular</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                        <input type="text" class="form-control" id="" placeholder="" name="direccion" required>
                        <label for="direccion">Domicilio</label>
                    </div>
                </div>
                <div class="col">
                    
                    <div class="form-floating mt-3 mb-3">
                        <input type="text" class="form-control" id="" placeholder="" name="fechaNacimiento" required>
                        <label for="fechaNacimiento">Fecha de nacimiento</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                        <select name="sexo" id="" class="form-control" required>
                            <option disabled selected value></option>
                            <option value="masculino">Masculino</option>
                            <option value="femenino">Femenino</option>
                        </select>
                        <label for="sexo">Sexo</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                        <select name="tipoSangre" id="" class="form-control" required>
                            <option disabled selected value></option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                        <label for="tipoSangre">Tipo de Sangre</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                        <input type="text" class="form-control" id="" placeholder="" name="no_ContacEmergencia" required>
                        <label for="no_ContacEmergencia">Numero Contacto de Emergencia</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                        <input type="text" class="form-control" id="" placeholder="" name="alergias">
                        <label for="alergias">Alergias</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                        <input type="text" class="form-control" id="" placeholder="" name="password" required>
                        <label for="password">Contraseña</label>
                    </div>
                </div>
                <div class="col">
                    
                    <div class="form-floating mt-3 mb-3">
                        <input type="text" class="form-control" id="" placeholder="" name="Medicamentos_act">
                        <label for="Medicamentos_act">Medicamentos Actuales</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                        <input type="text" class="form-control" id="" placeholder="" name="enfermedades">
                        <label for="enfermedades">Enfermedades</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                        <input type="text" class="form-control" id="" placeholder="" name="cirugias_Acci">
                        <label for="cirugias_Acci">Cirugias que necesita</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                        <input type="text" class="form-control" id="" placeholder="" name="estatura" required>
                        <label for="estatura">Estatura</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                        <input type="text" class="form-control" id="" placeholder="" name="peso" required>
                        <label for="peso">Peso</label>
                    </div>
                </div>
                <button type="submit">Submit</button>
                <a href="login.php">Ya Tienes Cuenta? Haz Click Aqui</a>
            </div>
        </div>
    </form>
</body>
</html>