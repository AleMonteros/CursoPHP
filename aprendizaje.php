<?php

    //Variables

    // Las variables se declaran poniendo un signo de $ seguido del nombre de la variable , no se especifica que tipo de variable es, ya sea un entero o una cadena de caracteres
    $variable = 35; 
    $nombre = "Marcos";

    // Para imprimir valores hay dos formas : 

        // El uso de echo(eco) es la forma más conocida
        echo $variable . "<br>" ;  //Para usar html este debe estar entre comillas para que sea aplicado 
        echo $nombre . "<br>" ; 
        echo "Mi nombre es $nombre" . "<br>" ;

        // El uso de print es otra forma de imprimir valores, su funcionamiento es igual al de echo
        print "Y tengo $variable años" . "<br>" ;
    
    // Tipos de Datos y Arreglos :
        
        // Caracter 
        $letra = "c";

        // Entero 
        $numero = 45;

        // Cadena
        $cadena = "Esto es una cadena";

        // Flotante
        $decimal = 8.14;

        // Booleano
        $variableVerdad = true;
        $variableFalsa = false;

        // Arreglo (coleccion de valores encasillados en una variable)
        $carros = array("chico", "camión", "convertible");
        $edades = array(12, 23, 34, 45);
        
        // Nulos
        $nada = null;
        
        // Para imprimir un arreglo usamos la propiedad print_r() , debido a que con echo no es posible
        print_r($carros) . "<br>";

    // Funciones para Strings
        
        $mensaje = "Este es el mensaje para PHP"; 
        echo "<br>";

        // Longitud - Usamos la propiedad strlen para recibir la longitud del string, en este caso su longitud es 27 en total, 22 caracteres y 5 espacios.
        echo strlen($mensaje); 
        echo "<br>";

        // Numero de Palabras - Usamos la propiedad str_word_count para recibir la cantidad de palabras que hay en el string. En este caso son 6 palabras.
        echo str_word_count($mensaje);
        echo "<br>";

        //Reversa - Usamos la propiedad strrev para invertir el string - Nuestro caso seria : "PHP arap ejasnem le se estE"
        echo strrev($mensaje);
        echo "<br>";

        //Encontrar Texto -  Usamos la propiedad strpos para indicar en que posicion comienza la palabra que se desea buscar. Te devuelve un valor numerico, en este caso la palabra "el" comienza pasando la posicion 8.
        echo strpos($mensaje, "el");
        echo "<br>";

        //Reemplazar Texto - la propiedad  str_replace remplaza una palabra especifica del string. En nuestro caso se remplazo la palabra "PHP" por "Java".
        echo str_replace("PHP", "Java", $mensaje);
        echo "<br>";



?>