<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EML</title>
    <link rel="stylesheet" href="../CSS/actualizacion.css">
    <script src="../JS/main.js"></script>
</head>

<body>
    <div id="d1">
        <button id="lius" class="btn" onclick="lius()">Listado de usuarios</button>
        <button id="crus" class="btn" onclick="crus()">Crear un nuevo usuario</button>
    </div>

    <!-- formulario para actualizar datos mediante el correo -->
    <form method="post" action="update.php">
        <div>
            <label class="textp" for="id">Id:</label>
            <input class="input" type="text" name="id" id="id" placeholder="Actualizar mediante Id" required>
        </div>
        <div>
            <label class="textp" for="correo">Correo electrónico:</label>
            <input class="input" type="email" name="correo" id="correo" placeholder="Correo nuevo" required>
        </div>
        <div>
            <label class="textp" for="nombres">Nombres:</label>
            <input class="input" type="text" name="nombres" id="nombres" placeholder="Nombres nuevos" required>
        </div>
        <div>
            <label class="textp" for="apellidos">Apellidos:</label>
            <input class="input" type="text" name="apellidos" id="apellidos" placeholder="Apellidos nuevos" required>
        </div>
        <button id="act" type="submit">Actualizar</button>
    </form>

</body>

</html>