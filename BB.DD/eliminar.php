<?php
require('Producto.php');
require('conexion.php');

$id = $_GET['id'] ?? '0';


$pdoSt = $pdo->prepare('DELETE FROM Producto WHERE (id=?)');

$pdoSt->bindParam(1, $id);


$pdoSt->execute();
?>