<?php
require('Producto.php');

require('conexion.php');
$precio = $_GET['id'] ?? 1;

$pdoSt= $pdo->query("SELECT nombre,codigodebarras,precio from producto WHERE id = ?");
$pdoSt->bindParam(1, $id);
$pdoSt->execute();

$producto = $pdoSt->fetch();

echo "Nombre: " . $producto['nombre'] . "<br>";
echo "Unidades: " . $producto['unidades'] . "<br>";
echo "Precio: " . $producto['precio'] . "<br>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>