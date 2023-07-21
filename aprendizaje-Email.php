<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
    <link rel="stylesheet" href="css/style-email.css">
</head>
<body>
    
    <form action="./include/email.php" method="post">
        
        <h2>Contacto</h2>
        <p> Nombre : <br>
            <input type="text" name="name" require>
        </p>
        <p> Correo Electronico : <br>
            <input type="email" name="email" require>
        </p>
        <p>Comentario
            <textarea name="comment" id="" cols="30" rows="10" require></textarea>
        </p>
        <p class="center">
            <input type="submit" value="Enviar Correo">
        </p>

    </form>

</body>
</html>