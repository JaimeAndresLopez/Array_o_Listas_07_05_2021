  
<?php
    
    $lista = (array) [
        (string) 'Jaime',
        (int) 5,
        (bool) true,                                    //Array o lista o arreglo, contiene varios datos en una variable, pueden ser diferente tipo
        (object) function (string $p1): string{          //de dato, identificar q tipo de dato es y su posicion inicial es 0
            return "Hola Mundo $p1";
        },
        (array) [(string) 'Lopez', (string) 'Chacon']
    ];

    for ($i=0; $i < count($lista); $i++) {
        if(gettype($lista[$i]) == 'object'){
            echo (string) <<<DATOS
                ${!${''} = $lista[$i]('soy Jaime')} <br>
            DATOS;
        }
        else if(gettype($lista[$i]) == 'array'){
            echo (string) <<<DATOS
                ${!${''} = join(' ', $lista[$i])}
            DATOS;   
        }
        else echo "$lista[$i] <br>";
    }

?>