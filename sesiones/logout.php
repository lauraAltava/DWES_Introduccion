<?php

    session_start();
    echo $_SESSION["username"];
    session_unset();
    session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesion cerrada</title>
</head>
<body>
has cerrado sesion
</body>
</html>