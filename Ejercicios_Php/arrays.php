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

///CREANDO ARRAY ///

    $nombres = array("Pepe", "Luis", "Juan", "Rosa");
    print_r($nombres);

///MOSTRANDO CUANTOS ELEMENTOS///
    
echo "<br>";

    $contar = count($nombres);

    print_r("Hay " . $contar . " elementos");


///CREAR CADENA CON ELEMENTOS DE ELEMENTOS DE LA ARRAY///

echo "<br>";

    $cadena = implode(" ", $nombres);

    print("Cadena: " . $cadena);

///ORDENAR ARRAY///

echo "<br>";

    $ordenada = ($nombres);
    sort($nombres);
    print_r($nombres);

///ORDEN INVERSO ARRAY///

echo "<br>";

    $inverso = array_reverse($nombres);
    print_r($inverso);

///POSICION DE TU NOMBRE///

echo "<br>";

    $name = array_search('Rosa', $nombres);
    print_r("Posicion de mi nombre: " . $name);


///ARRAYS DENTRO DE OTRA ARRAY///

echo "<br>";

    $alumnos = [
        [
        'id' => 013,
        'nombre' => "Pablo",
        'edad' => 19
        ],
        [
        'id' => 589,
        'nombre' => "Luis",
        'edad' => 21

        ],
        [
        'id' => 023,
        'nombre' => "Laura",
        'edad' => 25
        ]
    ];

print_r($alumnos);

echo "<br>";

?>

<!-- CREANDO TABLA CON ARRAY -->

<br>

<table>
    <?php
        foreach ($alumnos as $alumno){
            ?><tr><?php
            foreach ($alumno as $datos){
                ?><td><?php 
                echo($datos)?>
                  </td> <?php
                  }
                  ?>
              </tr> <?php
            

        }
    ?>
</table>

<?php
    ///PONIENDO ARRAY EN COLUMNAS///

    $nombres = array_column($alumnos, 'nombre');

    print_r($nombres);


    echo "<br>";

    ///SUMANDO NUMEROS DE ARRAY///

    $numeros = array(1,1,1,1,1,1,2,3,1,2);

    $suma = array_sum($numeros);

    print_r($numeros);

    echo "<br>";

    print_r("La suma de la array es: " . $suma);



?>
</body>
</html>