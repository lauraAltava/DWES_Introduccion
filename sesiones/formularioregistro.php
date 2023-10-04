<?php
require('conexion.php');
$errorPass = "";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'] ?? 'noname';
    $email = $_POST['email'] ?? '0';
    $password = $_POST['password'] ?? '0';

    $pass = $_POST['confirmarContraseña'];

    if ($pass == $password){

        $pdoSt = $pdo->prepare('INSERT INTO users (username, email, password) VALUES (?, ?, ?)');

        $pdoSt->bindParam(1, $username);
        $pdoSt->bindParam(2, $email);
        $pdoSt->bindParam(3, $password);

        $pdoSt->execute();
    }else{
        $errorPass = "Contraseñas no coinciden";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formularioregistro.php" method="post" enctype="multipart/form-data">

        Nombre de usuari@: <input type="text" name="username" ><br>
        Correo electronico: <input type="email" name="email" ><br>
        Contraseña: <input type="password" name="password" ><br>
        Confirmar contraseña: <input type="password" name="confirmarContraseña" ><br>
        <?php echo $errorPass ?>
        <input type="submit" name="submit" value="Enviar">

    </form>
</body>
</html>