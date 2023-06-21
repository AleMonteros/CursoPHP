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

        //Convertir a Minúsculas
        echo strtolower($mensaje);
        echo "<br>";

        //Convertir a Mayúsculas
        echo strtoupper($mensaje);
        echo "<br>";

        //Comparar Cadenas - La propiedad de strcmp compara las cadenas teniendo en cuenta la cantidad de bits que estas ocupan. Por ejemplo si la cadena Num1 es menor a la Num2 se dara un numero negativo y si es al reves, positivo. En caso de ser iguales, saldra un valor igual a cero
        echo strcmp("a", "b");
        echo "<br>";

        //Sustraer Cadena - Con la propiedad substr, extraemos la porcion de cadena que no quiera, teniendo en cuenta desde que posicion del string comienza la parte a substraer, ademas tambien se puede indicar que cantidad de caracteres se van a extraer
        echo substr($mensaje , 8, 8);
        echo "<br>";

        //Remover Espacios en Blanco
        echo trim("    Hola    soy     Alejandro");
        echo "<br>";

    // Operadores

        $x =15;
        $y =5;
       
        // Operaciones Aritmeticas

            //Suma
            echo $x + $y;
            echo "<br>";

            //Resta
            echo $x - $y;
            echo "<br>";

            //Multiplicación
            echo $x * $y;
            echo "<br>";

            //División
            echo $x / $y;
            echo "<br>";

            //Modulo
            echo $x % $y;
            echo "<br>";

            //Exponencial
            echo $x ** $y;
            echo "<br>";

        // Operaciones de Asignación

            $x = $y;
            $x += $y;
            $x -= $y;
            $x *= $y;

            //Igual a .. (compara el valor de la variable)
            var_dump($x == $y);   
            //Es identico a .. (compara el valor y tipo de variable)
            var_dump($x === $y);
            // Mayor a ..
            var_dump($x > $y);
            // Menor a ..
            var_dump($x < $y);
            // Mayor Igual a ..
            var_dump($x >= $y);
            // Menor Igual a ..
            var_dump($x <= $y);
            // Distinto a  ..
            var_dump($x <> $y);
            // No es igual a ..
            var_dump($x != $y);
            // No es Identico a  ..
            var_dump($x !== $y);

            //Operadores de Incremento;
            echo $x++;
            echo $x--;


?>