<?php

    $host = "localhost";
    $username = "root";
    $password = "crossfox2023";

    $conexion = new mysqli($host, $username, $password);

    if($conexion -> connect_error){
        die("Conexión fallida : " . $conexion -> connect_error);
    }

    echo "Conexión Exitosa";

?>