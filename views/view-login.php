<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesiones</title>
    <link rel="stylesheet" href="./css/style-login.css">
</head>
<body>
    
    <form action="" method="POST">

        <?php 
        
            if(isset($errorLogin)){
                echo $errorLogin;
            }
        
        ?>
        <h2>Iniciar Sesión</h2>
        <p>Nombre de Usuario : <br>
            <input type="text" name="username" id="">
        </p>
        <p>Password : <br>
            <input type="password" name="password" id="">
        </p>
        <p class="center">
            <input type="submit" value="Iniciar Sesión">
        </p>

    </form>

</body>
</html>