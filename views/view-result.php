<div class="opcion">

    <?php 
        $widthBar = $porcentaje * 5;
        $estilo = "barra";
        
        if($survey->getOptionSelected() == $lenguaje['Opcion']){
            $estilo = "seleccionado";
        }

        echo $lenguaje['Opcion'];
    ?>

    <div class="<?php echo $estilo; ?>" style="width : <?php echo $widthBar . 'px;' ?>" >
        <?php 
            echo $porcentaje . '%';
        ?>
    </div>

</div>