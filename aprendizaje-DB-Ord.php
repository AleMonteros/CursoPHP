<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>Insertar datos</title>
</head>

<body>
    <div id="main-container">
        <form id="nuevo-pendiente-container" action="aprendizaje-DB-Ord.php" method="POST">
            <input type="text" name="texto" id="texto">
            <input type="submit" value="Añadir Tarea">
        </form>


        <div id="mostrar-todo-container">
            <form id="formMostrarTodo" action="aprendizaje-DB-Ord.php" method="POST">
                <input type="checkbox" name="mostrar-todo" onchange="mostrarTodo(this)" 
                    <?php if (isset($_POST['mostrar-todo'])) {
                            if ($_POST['mostrar-todo'] == "on") {
                                echo " checked";
                            }
                    } ?>> Mostrar Todo
            </form>
        </div>

        <div id="newList">
            <?php

            //Conexión a la BD
            $host = "localhost";
            $username = "root";
            $password = "crossfox2023";
            $database = "newlistDB";

            $conexion = new mysqli($host, $username, $password, $database);

            if ($conexion->connect_error) {
                die("Conexión fallida: " . $conexion->connect_error);
            }

            //Validación de datos para ingresar
            if (isset($_POST['texto'])) {
                $texto = $_POST['texto'];
                if ($texto != "") {
                    $sql = "INSERT INTO newTable(Texto, Terminado)
                                        VALUES('$texto', false)";

                    if ($conexion->query($sql) === true) {
                        //echo '<div><form action=""><input type="checkbox">'.$texto.'</form></div>';
                    } else {
                        die("Error al insertar datos: " . $conexion->error);
                    }
                }
            } else if (isset($_POST['completar'])) {
                $id = $_POST['completar'];

                $sql = "UPDATE newTable SET Terminado = 1 WHERE ID = $id";

                if ($conexion->query($sql) === true) {
                    //echo '<div><form action=""><input type="checkbox">'.$texto.'</form></div>';
                } else {
                    die("Error al actualizar datos: " . $conexion->error);
                }
            } else if (isset($_POST['eliminar'])) {
                $id = $_POST['eliminar'];

                $sql = "DELETE FROM newTable WHERE ID = $id";

                if ($conexion->query($sql) === true) {
                    //echo '<div><form action=""><input type="checkbox">'.$texto.'</form></div>';
                } else {
                    die("Error al actualizar datos: " . $conexion->error);
                }
            }

            $sql = "";
            if (isset($_POST['mostrar-todo'])) {
                $ordenar = $_POST['mostrar-todo'];

                if ($ordenar == "on") {
                    $sql = "SELECT * FROM newTable ORDER BY Terminado";
                }
            } else {
                $sql = "SELECT * FROM newTable WHERE Terminado = 0";
            }
            //Obtención de datos de tabla
            $resultado = $conexion->query($sql);

            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
            ?>
                    <div class="pendiente">
                        <form method="POST" class="form_actualizar" id="form<?php echo $row['ID']; ?>" action="">
                            <input name="completar" value="<?php echo $row['ID']; ?>" id="<?php echo $row['ID']; ?>" type="checkbox" onchange="completarPendiente(this)" <?php if ($row['Terminado'] == 1) echo " checked disabled"; ?>>
                            <div class="texto <?php if ($row['Terminado'] == 1) echo " deshabilitado"; ?>"><?php echo $row['Texto']; ?></div>
                        </form>
                        <form method="POST" class="form_eliminar" action="aprendizaje-DB-Ord.php">
                            <input type="hidden" name="eliminar" value="<?php echo $row['ID']; ?>" />
                            <input type="submit" value="Eliminar">
                        </form>
                    </div>
            <?php

                }
            }

            $conexion->close();

            ?>
        </div>
    </div>


    <script>
        function completarPendiente(e) {
            var id = "form" + e.id;
            var formulario = document.getElementById(id);
            formulario.submit();
        }

        function mostrarTodo(e) {
            var formulario = document.getElementById("formMostrarTodo");
            formulario.submit();
        }
    </script>
</body>

</html>