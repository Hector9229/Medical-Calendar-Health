<?php

    include ('conexion.php');
    $conn = connection();

    $id_Paciente = $_POST['id_Paciente'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $celular = $_POST['celular'];
    $direccion = $_POST['direccion'];
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $sexo = $_POST['sexo'];
    $tipoSangre = $_POST['tipoSangre'];
    $peso = $_POST['peso'];
    $estatura = $_POST['estatura'];
    $alergias = $_POST['alergias'];
    $cirugias_Acci = $_POST['cirugias_Acci'];
    $Medicamentos_act = $_POST['Medicamentos_act'];
    $enfermedades = $_POST['enfermedades'];
    $no_ContacEmergencia = $_POST['no_ContacEmergencia'];

    $consultar = "call actualizarPaciente ('$id_Paciente', '$nombre', '$apellidos', '$celular','$direccion',
    '$fechaNacimiento','$sexo','$tipoSangre','$peso','$estatura','$alergias','$cirugias_Acci','$Medicamentos_act',
    '$enfermedades','$no_ContacEmergencia')";       
    
    $query = mysqli_query($conn, $consultar);

    if($query){
        Header("Location:personaldata.php");
    }

?>