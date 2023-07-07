<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Obtener Datos - Modif
    </title>
</head>

<body>
    <form action="aprendizaje-DB-Modif.php" method="POST">
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

        if ($conexion->connect_error) {
            die("Conexión fallida : " . $conexion->connect_error);
        }

        // Insercion de Datos

        if (isset($_POST['texto'])) {
            $texto = $_POST['texto'];

            $sql = "INSERT INTO newTable(Texto, Terminado) VALUE('$texto', false)";

            if ($conexion->query($sql) === true) {
                // echo '<div>
                //         <form action="">
                //             <input type = "checkbox"> '.$texto.'
                //         </form>
                //       </div>';
            } else {
                die("Error al Insertar datos : " . $conexion->error);
            }
        } else if (isset($_POST['completar'])) {
            $id = $_POST['completar'];
            $sql = "UPDATE newTable SET Terminado = 1 WHERE ID = $id";

            if ($conexion->query($sql) === true) {
                // echo '<div>
                //         <form action="">
                //             <input type = "checkbox"> '.$texto.'
                //         </form>
                //       </div>';
            } else {
                die("Error al actualizar datos : " . $conexion->error);
            }
        }

        // Obtencion de Datos 

        $sql = "SELECT * FROM newTable WHERE Terminado = 0";
        $resultado = $conexion->query($sql);

        if ($resultado->num_rows > 0) {
            while ($row = $resultado->fetch_assoc()) {
        ?>
                <div>
                    <form id="form<?php echo $row['ID']; ?>" action="aprendizaje-DB-Modif.php" method="POST">
                        <input name="completar" value="<?php echo $row['ID']; ?>" id="<?php echo $row['ID']; ?>" type="checkbox" onchange="completarPendiente(this)"><?php echo $row['Texto']; ?>
                    </form>
                </div>
        <?php
            }
        }

        $conexion->close();
        ?>
    </div>

    <script>
        function completarPendiente(e) {
            var id = "form" + e.id;
            var formulario = document.getElementById(id);
            formulario.submit();
        }
    </script>

</body>

</html>