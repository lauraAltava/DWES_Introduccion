<?php
require('conexion.php');
session_start();

function filtrado($datos){
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;

}

$errores = [];

if (isset($_POST["submit"])){
    $username = filtrado($_POST["username"] ?? "");
    $password = ($_POST["password"] ?? "");
    if (empty($username)){
        $errores[] = "El campo usuario no puede estar vacio. "; 
    }
    if (empty($password)){
        $errores[] = "El campo contraseña no puede estar vacia ";

    }

    if(!$errores){
        $sql = "SELECT username FROM users WHERE username = ? AND password = ? ";
        $stm = $pdo -> prepare($sql);

        $stm -> bindParam(1, $username);
        $stm -> bindParam(2, $password);

        $stm -> execute();
        $register = $stm -> fetch();
        if ($register){
            $_SESSION["username"] = $register["username"];
            header("location: privada.php");
        }else{
            $errores[] = "Usuario  o contreseña no existen";
        }

    }
   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
</head>
<body>
    <form action="login.php" method="post" enctype="multipart/form-data">

        Nombre de usuari@: <input type="text" name="username" ><br>
        Contraseña: <input type="password" name="password" ><br>
        <input type="submit" name="submit" value="Enviar"> <br>

        <?php 
        if(count($errores) > 0){
            foreach ($errores as $error){
                echo ($error);
            }
        }
        ?>

    </form>
</body>
</html>