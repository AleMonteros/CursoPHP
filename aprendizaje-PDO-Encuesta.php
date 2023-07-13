<?php 
    include_once 'include/survey.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="css/style.css"> 
    <title>Encuesta</title>
</head>
<body>
    
    <form action="#" method="POST">

        <?php
            $survey = new Survey;
            $showResults = false;

            if(isset($_POST['lenguaje'])){
                $showResults = true;
                $survey->setOptionSelected($_POST['lenguaje']);
                $survey->vote();
            }

            // echo $survey->getTotalVotes();

        ?>

        <h2>¿Cual es tu Lenguaje de Programación Favorito?</h2>
        
        <?php 
            if($showResults){
                $resultados = $survey->showResults();
                echo '<h2>' . $survey->getTotalVotes() . ' Votos Totales </h2>';
                foreach($resultados as $lenguaje){
                    $porcentaje = $survey->getPercentageVotes($lenguaje['Votos']);

                    include 'views/view-result.php';
                }
            }else {
                include 'views/view-vote.php';
            }
        ?>

    </form>

    <?php 
        // $db = new DB();
        // $db->connect();
    ?>

</body>
</html>