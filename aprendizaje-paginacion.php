<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paginación</title>
    <link rel="stylesheet" href="css/style-paginacion.css">
</head>
<body>
    
    <?php 
        include_once 'include/peliculas.php';
        $peliculas = new Peliculas(3);
    ?>

    <div id="container">

        <div id="paginas">
            <?php 
                $peliculas->mostrarPeliculas();
            ?>
        </div>
        <div id="peliculas">

        </div>

    </div>

</body>
</html>