<?php 

    // var_dump($_FILES["file"]["name"]);
    $directorio = "Archivos/ ";

    $archivos = $directorio . basename($_FILES["file"]["name"]);

    $tipoArchivo = strtolower(pathinfo($archivos, PATHINFO_EXTENSION));

    // Validacion del tipo de archivo Imagen
    $check = getimagesize($_FILES["file"]["tmp_name"]);

    if($check != false){

        // Validacion del tamaño de Archivo

        $size = $_FILES["file"]["size"];
        if($size > 500000){
            echo "El archivo tiene que ser menor a 500kb";
        }else{
            //Validacion de TIpo de Imagen
            if($tipoArchivo == "png" || $tipoArchivo == "PNG"){
                // Si se valido el archivo correctamente
                if(move_uploaded_file($_FILES["file"]["tmp_name"], $archivos)){
                    echo "Se subio Correctamente";
                }else{
                    echo "Hubo un error en la carga del archivo";
                }
            }else{
                echo "Solo se admiten archivos png/PNG";
            }
        }

    }else{

        echo "El archivo no es una imagen";

    }



?>