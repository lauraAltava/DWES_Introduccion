<?php
     
     $idioma = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
     $idioma_recortado = substr($idioma,0,2);
     echo($idioma_recortado);
?>

<!DOCTYPE html>
<html lang=<?$idioma?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    if ($idioma_recortado == 'es'): 
?>
<p> Hola, bienvenido! </p>
<?php endif?>
<?php
    if ($idioma_recortado == 'en'):
        ?> 
<p>Hello, welcome! </p>
<?php endif?>
<?php
    if ($idioma_recortado == 'de'):
        ?> 
<p>Hallo, willkommen! </p>
<?php endif?>

</body>
</html>