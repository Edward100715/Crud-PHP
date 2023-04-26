<?php 

/* Conexion con la base de datos */

    $server = 'localhost';
    $user = 'root';
    $pasword = '';
    $dbname = 'usuarios';

    try {
        $conn = mysqli_connect($server, $user, $pasword, $dbname );
        if (!$conn) {
            die("Conexión no establecida" . mysqli_connect_error());
        }
    } catch (ErrorException $e) {
        echo $e->getMessage();
    }

?>