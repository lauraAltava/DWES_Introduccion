<?php
require('Producto.php');

require('conexion.php');

$resultado = $pdo->query("SELECT producto, unidades FROM stock WHERE id = " . $id);
?>