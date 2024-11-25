<?php
include ('conexion.php');
$conn = connection();

$Motivo = $_POST['Motivo'];
$id_Paciente = $_POST['id_Paciente'];
$Especialidad = $_POST['Especialidad'];
$Nombre = $_POST['Nombre'];
$Fecha = $_POST['Fecha'];
$Hora = $_POST['Hora'];


$insertCitas = "call insertCitas('$Motivo','$id_Paciente', '$Especialidad', '$Nombre',
'$Fecha','$Hora')";

$query = mysqli_query($conn, $insertCitas);

if ($query)
{
    Header("Location:profile.php");
}
?>