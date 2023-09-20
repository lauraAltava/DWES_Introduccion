<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    ///convertir cadena en array
        $temperaturas = "1,2,3,4,5,25,26,27,28,29,30";

        echo("Cadena: " . $temperaturas);

        echo"<br>";

        $temperaturas_array = explode(",",$temperaturas);

        $suma = array_sum($temperaturas_array);
        $elementos = count($temperaturas_array);

        $media = $suma / $elementos;

        echo("La media es: " . $media);

        echo"<br>";

        ///en este caso ya esta ordenada no hay que usar sort

        for ($i = 0; $i < 5; $i++) {
            echo("Minimas: " . $temperaturas_array[$i]);
        }

        echo"<br>";

        for ($i = count($temperaturas_array) - 1; $i > count($temperaturas_array) - 6; $i--) {
            echo("Maximas: " . $temperaturas_array[$i]);
        }


    
    ?>
    
</body>
</html>