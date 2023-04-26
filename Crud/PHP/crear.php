<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EML</title>
    <link rel="stylesheet" href="../CSS/crear.css">
    <script src="../JS/main.js"></script>
</head>

<body>
    <div id="d1">
        <button id="lius" class="btn" onclick="lius()">Listado de usuarios</button>
        <button id="acus" class="btn" onclick="acus()">Actualizacion de usuarios</button>
    </div>
<!-- Formulario con los datos para agregarlos en la base de datos usuarios -->
    <form method="post" name="form" action="crear.php">
        <div>
            <input class="input" type="email" name="correo" placeholder="Correo" autocomplete="off" required>
        </div>
        <div>
            <input class="input" type="int" name="id" placeholder="ID" autocomplete="off" required>
        </div>
        <div>
            <input class="input" type="text" name="nombres" placeholder="Nombres" autocomplete="off" required>
        </div>
        <div>
            <input class="input" type="text" name="apellidos" placeholder="Apellidos" autocomplete="off" required>
        </div>
        <div>
            <input class="input" type="number" name="telefono" placeholder="Telefono" autocomplete="off" required>
        </div>
        <div>
            <p class="input" style="color: aqua;">Fecha de registro: <input type="date" name="fecha_registro" autocomplete="off" required></p>
        </div>
        <input type="submit" class="btn" name="send" value="Agregar">
    </form>
<!-- Fin de formulario -->
</body>

</html>

<?php
// se importa el archivo de conexion con la base de datos
include('conexion.php');

// se realiza la validacion de datos enviados a la base de datos y se registran
if (isset($_POST['send'])) {
    $correo = $_POST['correo'];
    $id = $_POST['id'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $fecha_registro = $_POST['fecha_registro'];
    $telefono = $_POST['telefono'];

    $query = "INSERT INTO usuarios (correo, id, nombres, apellidos, fecha_registro, telefono) 
            VALUES ('$correo', '$id', '$nombres', '$apellidos', '$fecha_registro', '$telefono')";

    if (mysqli_query($conn, $query)) {
        header('Location: crear.php');
        echo "<script>alert('¡El usuario se registro correctamente!');</script>";
    } else {
        echo "<script>alert('Hubo un error, el correo ya exite o intentalo de nuevo mas tarde.');</script>";
    }
}

?>