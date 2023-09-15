<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $palabra = $_GET['x'] ?? ' ';
        $cadena = trim($palabra, $caracter = "/");
        echo $cadena;

        echo "</br>";


        $tamaño = strlen($palabra);
        echo $tamaño;


        echo "</br>";


        $mayus = strtoupper($palabra);
        echo $mayus;


        echo "</br>";


        $minus = strtolower($palabra);
        echo $minus;

        

        echo "</br>";
        
        $prefijo = $_GET['y'] ?? ' ';
        $cadena1 = strpos($palabra, $prefijo) ;


        if ($cadena1 === false) {
            echo("No tiene prefijo");
        }else{
            echo("Tiene prefijo");
        }
          
        
        echo "</br>";


        
        $veces = substr_count($minus, 'a' );

        echo($veces);


        echo "</br>";


        $posicion = stripos($minus, 'a');

        if ($posicion === false) {
            echo("No tiene");
        }else{
            echo($posicion);
        }


        echo "</br>";


        $sustituye = str_ireplace('o', 0, $palabra);

        echo($sustituye);


        echo "</br>";

        $url = 'http://username:password@hostname:9090/path?arg=value';

        
        $url1= parse_url($url, PHP_URL_SCHEME) ;

        echo $url1 . "</br>";
        
        $url2= parse_url($url, PHP_URL_USER) ;

        echo $url2 . "</br>";


        $url3= parse_url($url, PHP_URL_PATH) ;

        echo $url3 . "</br>";

        $url4= parse_url($url, PHP_URL_QUERY) ;

        echo($url4);



















     
        



    ?>


</body>
</html>