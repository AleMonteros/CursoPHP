<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subir Archivos</title>
    <link rel="stylesheet" href="./css/style-up-archiv.css">
</head>
<body>
    
    <form action="./include/upload-archivos.php" method="POST" enctype="multipart/form-data">
        <h2>Subir Archivos</h2>
        <input type="file" name="file">
        <p class="center">
            <input type="submit" value="Subir Archivo">
        </p>
    </form>

</body>
</html>