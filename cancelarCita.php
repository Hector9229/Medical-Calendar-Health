<?php
    include ('conexion.php');
    $conn = connection();

    $consultar ="SELECT Fecha FROM citas";
    $result = mysqli_query($conn, $consultar);
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
    <h1>Cancelar cita</h1>
    <form action="cancelarCitas.php" class="was-validated">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                <div class="form-floating mt-3 mb-3">
                <select name="tipoSangre" id="" class="form-control" required>
                        <?php while($row=mysqli_fetch_array($result)):?>
                            <option><?php echo $row['Fecha'] ?></option>
                        
                        <?php endwhile;?>
                        </select>
                        <label for="email">Citas programadas</label>
                    </div>
                </div>
                <button type="submit">Submit</button>
            </div>
        </div>
    </form>

</body>
</html>