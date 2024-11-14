<?php
include ('conexion.php');
$conn = connection();

$nombre = $_POST['nombre'] ;
$apellidos = $_POST['apellidos'];
$celular = $_POST['celular'];
$direccion = $_POST['direccion'];
$email = $_POST['email'];
$fechaNacimiento  = $_POST['fechaNacimiento'];
$sexo  = $_POST['sexo'];
$tipoSangre  = $_POST['tipoSangre'];
$no_ContacEmergencia  = $_POST['no_ContacEmergencia'];
$alergias  = $_POST['alergias'];
$Medicamentos_act  = $_POST['Medicamentos_act'];
$password  = $_POST['password'];
$enfermedades  = $_POST['enfermedades'];
$cirugias_Acci  = $_POST['cirugias_Acci'];
$estatura  = $_POST['estatura'];
$peso  = $_POST['peso'];

$insert = "call InsertPaciente('$_REQUEST[nombre]','$_REQUEST[apellidos]','$_REQUEST[celular]','$_REQUEST[direccion]',
'$_REQUEST[email]','$_REQUEST[fechaNacimiento]','$_REQUEST[sexo]','$_REQUEST[tipoSangre]','$_REQUEST[no_ContacEmergencia]',
'$_REQUEST[alergias]','$_REQUEST[Medicamentos_act]','$_REQUEST[password]','$_REQUEST[enfermedades]',
'$_REQUEST[cirugias_Acci]','$_REQUEST[estatura]','$_REQUEST[peso]')";

$query = mysqli_query($conn, $insert);

if ($query)
{
    Header("Location:home.php");
}
?>