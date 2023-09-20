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
        $array = array ('españa' => 'madrid', 'noruega' => 'oslo', 'alemania' => 'berlin');

        function compara($lista1, $lista2) {
            if (strlen($lista1) == strlen($lista2)) {
                return 0;
            }
            return ($lista1 > $lista2) ? -1 : 1;


        }

        print_r($array);

        echo "<br>";

        uasort($array, 'compara');
        print_r($array);

    ?>


    
</body>
</html>