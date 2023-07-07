<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Obtener Datos - Select
    </title>
</head>
<body>
    <form action="aprendizaje-DB-Select.php" method="POST">
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
                    // echo '<div>
                    //         <form action="">
                    //             <input type = "checkbox"> '.$texto.'
                    //         </form>
                    //       </div>';
                }else{
                    die("Error al Insertar datos : " . $conexion -> error);
                }
            }
            $sql = "SELECT * FROM newTable";
                $cantidad = $conexion->query($sql);

                if($cantidad->num_rows > 0){
                    while($row = $cantidad->fetch_assoc()){
                        echo '<div>
                            <form action="">
                                <input type = "checkbox"> '.$row['Texto'].'
                            </form>
                          </div>';
                    }
                }

            $conexion->close();
        ?>
    </div>
</body>
</html>