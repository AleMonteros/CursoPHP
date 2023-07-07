<?php

    $host = "localhost";
    $username = "root";
    $password = "crossfox2023";
    $database = "newlistDB";

    $conexion = new mysqli($host, $username, $password, $database);

    if($conexion -> connect_error){
        die("Conexión fallida : " . $conexion -> connect_error);
    }

    // $sql = "CREATE DATABASE newListDB";
    // if($conexion -> query($sql) === true){
    //     echo "Base de Datos Creada Correctamente";
    // }else{
    //     die("Error al Crear Base de Datos : " . $conexion -> error);
    // }

    $sql = "CREATE TABLE newTable (
        ID INT(11) AUTO_INCREMENT PRIMARY KEY,
        Texto VARCHAR(100) NOT NULL,
        Terminado BOOLEAN NOT NULL,
        Fecha TIMESTAMP
    )";

    if($conexion -> query($sql) === true){
        echo "La Tabla se creo correctamente";
    }else{
        die("Error al crear Tabla : " . $conexion -> error);
    }

?>