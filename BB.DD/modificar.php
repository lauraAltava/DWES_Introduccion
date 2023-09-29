<?php
require('Producto.php');
require('conexion.php');

$nombre = $_GET['nombre'] ?? 'noname';
$unidades = $_GET['unidades'] ?? '0';
$precio = $_GET['precio'] ?? '0';
$id = $_GET['id'] ?? '0';

$pdoSt = $pdo->prepare('UPDATE Producto SET nombre= ?, unidades=?, precio=?  WHERE (id=?)');


$pdoSt->bindParam(1, $nombre);
$pdoSt->bindParam(2, $unidades);
$pdoSt->bindParam(3, $precio);
$pdoSt->bindParam(4, $id);


$pdoSt->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
</head>
<body>
    
</body>
</html>