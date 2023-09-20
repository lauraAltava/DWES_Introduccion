<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    ////ordenar por clave ascendente
        $edades=array("Juan"=>"31","María"=>"41","Andrés"=>"39","Berta"=>"40");
        ksort($edades);
        
        foreach ($edades as $clave => $valor){
            echo($clave . " => " . $valor . "\n");
        }

        echo"<br>";

    ////ordenar por clave descendente

        krsort($edades);
        
        foreach ($edades as $clave => $valor){
            echo($clave . " => " . $valor . "\n");
    }

         echo"<br>";

    ////ordenar por valor ascendete

        asort($edades);
        
        foreach ($edades as $clave => $valor){
            echo($clave . " => " . $valor . "\n");
    }

        echo"<br>";

    ////ordenar por valor descendete

        arsort($edades);
        
        foreach ($edades as $clave => $valor){
            echo($clave . " => " . $valor . "\n");
    }




    ?>
    


</body>
</html>