<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Condicionales</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: #bde85f;
        }
        div{
            background: white;
            padding: 20px;
            margin: 0 auto;
            width: 350px;
        }
        h1{
            text-align: center;
            font-size: 26px;
        }
    </style>
</head>
<body>
    <div>
        <?php
            $hora = 15;

            if($hora > 6 && $hora < 12){
                echo "<h1>Buenos Días a todos</h1>";
            }else if($hora >=12 && $hora <=18){
                echo "<h1>Buenas Tardes a todos</h1>";
            }else{
                echo "<h1>Buenas Noches a todos</h1>";
            }
        ?>
    </div>
</body>
</html>