<?php
include ('conexion.php');
$conn = connection();

$id_Citas = $_GET['id_Citas'];

$consultar = "call updateCitas ('$id_Citas')";

$query = mysqli_query($conn, $consultar);

if ($query)
{
    Header("Location:home.php");
}
?>