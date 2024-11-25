<?php
include ('conexion.php');
$conn = connection();

$Motivo = $_POST['Motivo'];
$Motivo = $_POST['id_Paciente'];
$Especialidad = $_POST['Especialidad'];
$Doctor = $_POST['Doctor'];
$Fecha_de_la_cita = $_POST['Fecha_de_la_cita'];
$Hora_de_la_cita = $_POST['Hora_de_la_cita'];


$insertCitas = "call insertCitas('$_REQUEST[Motivo]','$_REQUEST[id_Paciente]', '$_REQUEST[Especialidad]', '$_REQUEST[Doctor]',
'$_REQUEST[Fecha_de_la_cita]','$_REQUEST[Hora_de_la_cita]')";

$query = mysqli_query($conn, $insertCitas);

if ($query)
{
    Header("Location:home.php");
}
?>