<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Insertar Datos
    </title>
</head>
<body>
    <form action="aprendizaje-DB-Insert.php" method="POST">
        <input type="text" name="texto" id="texto">
        <input type="submit" value="Añadir tarea">
    </form>

    <div id="newList">
        <?php
            $host = "localhost";
            $username = "root";
            $password = "crossfox2023";
            $database = "newlistDB";
        
            $conexion = new mysqli($host, $username, $password, $database);
        
            if($conexion -> connect_error){
                die("Conexión fallida : " . $conexion -> connect_error);
            }

            if(isset($_POST['texto'])){
                $texto = $_POST['texto'];
                
                $sql = "INSERT INTO newTable(Texto, Terminado) VALUE('$texto', false)";

                if($conexion -> query($sql) === true){
                    echo '<div>
                            <form action="">
                                <input type = "checkbox"> '.$texto.'
                            </form>
                          </div>';
                }else{
                    die("Error al Insertar datos : " . $conexion -> error);
                }

                $conexion->close();
            }
        ?>
    </div>
</body>
</html>