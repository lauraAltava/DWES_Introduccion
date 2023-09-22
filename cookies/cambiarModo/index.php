<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modo Dark - Light</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <?php
        $modo= $_GET["modo"] ?? $_COOKIE["modo"] ?? "oscuro";
        setcookie("modo", $modo, time() + 30 * 24 * 60 * 60);
    ?>
</head>

<body class="<?= $modo?>">
    <a href="http://localhost:8000/cambiarModo/index.php?modo=oscuro">Oscuro</a>
    <a href="http://localhost:8000/cambiarModo/index.php?modo=claro">Claro</a>  
</body>

</html>