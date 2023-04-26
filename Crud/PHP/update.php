<?php
// Conectarse a la base de datos
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los valores del formulario
    $id = $_POST['id'];
    $correo = $_POST['correo'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];

    // Actualizar los datos en la base de datos
    $query = "UPDATE usuarios SET correo='$correo', nombres='$nombres', apellidos='$apellidos' WHERE id='$id'";
    mysqli_query($conn, $query);

    // Redirigir al usuario a otra página
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('El formulario se ha enviado satisfactoriamente');</script>";
        header('Location: listado.php');
    } else {
        echo "<script>alert('Hubo un error. Por favor, inténtelo de nuevo.');</script>";
    }
}