<?php
session_start();
if (!isset($_SESSION["username"])){
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logueado</title>
</head>
<body>
    <h1> Bienvenido  <?php echo $_SESSION["username"]?>! </h1> <br>
    <a href="logout.php">Cerrar Sesión</a>
</body>
</html>