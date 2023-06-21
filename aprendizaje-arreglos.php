<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Arreglos</title>
    <style>
        body{
            background-color: #b5cde6;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 2em;
            padding: 50px;
        }
    </style>
</head>
<body>
    <?php 
        $frutas = array("banana", "manzana", "pera", "naranja");
        print_r($frutas);

        echo "<br>";
        echo $frutas[1];

        echo "<br>";
        echo count($frutas) . " elementos";

        echo "<br>";
        for($i = 0 ; $i < count($frutas) ; $i++){
            echo $frutas[$i] . "<br>";
        }

        $edades = array("Marcos" => 34, "Alejandro" => 23, "Daiana" =>21);
        print_r($edades);

        echo "<br>";
        echo $edades["Alejandro"];

        echo "<br>";
        foreach($edades as $key => $value){
            echo $key . " tiene el valor de " . $value . "<br>";
        }
    ?>
</body>
</html>