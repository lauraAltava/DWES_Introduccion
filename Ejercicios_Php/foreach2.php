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
        $colores = array('blanco'=>'blanco.html', 'verde' => 'verde.html', 'rojo' => 'rojo.html');

        foreach($colores as $nombre => $enlace){
            ?><li><a href="<?php
            echo($enlace)?>"><?php
            echo($nombre);?></li><a><?php
        }

    ?>
    </ul>
</body>
</html>