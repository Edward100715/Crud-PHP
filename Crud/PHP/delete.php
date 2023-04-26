<?php  
/* importar conexion */
    include ('conexion.php');
    
    /* se valida cual es la id de la respectiva fila y se procede a eliminar mediante este */

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = "DELETE FROM usuarios WHERE id = '$id'";

        /* si la eliminacion fue satisfactoria mostrara la alerta y rediriga a la vista de lista*/

        if (mysqli_query($conn, $query)) {
            echo "<script>alert('Se eliminaron los datos satisfactoriamente');</script>";
            header('Location: listado.php');
        } else {
            echo "<script>alert('Error en eliminar los datos');</script>";
        }

    }

?>