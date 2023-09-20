<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php

    ///MOSTRAR LISTA DESORDENADA///
        $colores = array('blanco', 'verde', 'rojo');

        foreach ($colores as $color){
           ?><li><?php
           echo($color);?></li><?php 
        }
    ?>
    </ul>
    
</body>
</html>
