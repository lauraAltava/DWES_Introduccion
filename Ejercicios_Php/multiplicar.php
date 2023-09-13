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

        $nombres = [];
        $nombres [] = 'Sandra';
        $nombres [] = 'Raul';
        $nombres [] = 'Marta';

        $nombres[1] = 'Pablo';

        print_r($nombres);

        
        $alumno = [
        
            'nombre' => 'Sara',
            'apellido' => 'García',
            'edad' => 22
        
        ];
        
        $alumno['nombre'] = 'Verónica';
        echo $alumno['nombre'];

        $deportes = [

            'invierno' => ['esquí de fondo', 'hockey sobre hielo'],
            
            'verano' => [ 'natación', 'voley playa']
            
            ];
        
            print_r($deportes);
            $alumnos = [

                [
            
                    'nombre' =>'Sara',
            
                    'edad' =>25
            
                ],
            
                [
            
                    'nombre' =>'Pedro',
            
                    'edad' =>23
            
                ],
            
            ];


    ?>

<?php

    $meteors = array(

        'Hoba' => 60000000,

        'Cape York' => 58200000,

        'Campo del Cielo' => 50000000,

        'Canyon Diablo' => 30000000

    );

    print_r($meteors);

    echo "<hr>";

    foreach($meteors as $meteor){

        echo $meteor . "<br>";

    }

    

?> 
</body>
</html>