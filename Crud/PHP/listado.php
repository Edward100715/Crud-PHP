<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EML</title>
    <link rel="stylesheet" href="../CSS/listado.css">
    <script src="../JS/main.js"></script>
</head>

<body>
    <div id="d1">
        <button id="crus" class="btn" onclick="crus()">Crear un nuevo usuario</button>
        <button id="acus" class="btn" onclick="acus()">Actualizacion de usuarios</button>
    </div>
    <table>
        <!-- titulos de la tabla -->
        <thead>
            
            <tr>
                <th>Id</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Fecha registro</th>
                <th>Fecha modificacion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <!-- conexion con la base de datos y se traer los datos tipo flecha es sus respectivos td -->
        <tbody>
            <?php
            include('conexion.php');
            $query = "SELECT * FROM usuarios ORDER BY nombres ASC";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['nombres'] ?></td>
                    <td><?php echo $row['apellidos'] ?></td>
                    <td><?php echo $row['correo'] ?></td>
                    <td><?php echo $row['telefono'] ?></td>
                    <td><?php echo $row['fecha_registro'] ?></td>
                    <td><?php echo $row['fecha_modificacion'] ?></td>
                    <td>
                        <!-- boton que redirige a la vista de actualizar datos -->
                        <button id="act" onclick="acus()">
                            Actualizar
                        </button>
                        <!-- boton para eliminar los datos de la fila mediante el id  -->
                        <a id="eli" href="delete.php?id=<?php echo $row['id'] ?>">
                            Eliminar
                        </a>
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</body>

</html>