<?php
require('conexion.php');

$username = $email = "";

$errorPass = [];

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $username = $_POST['username'] ?? "";
    $email = $_POST['email'] ?? "";
    $password = $_POST['password'] ?? "";
    $pass = $_POST['confirmarContraseña'];

    if ($pass == $password){

        $pdoSt = $pdo->prepare('INSERT INTO users (username, email, password) VALUES (?, ?, ?)');

        $pdoSt->bindParam(1, $username);
        $pdoSt->bindParam(2, $email);
        $pdoSt->bindParam(3, $password);

    try{
        $pdoSt->execute();
    }catch(PDOException $emailRepetido){
        $errorMail = $emailRepetido->getMessage();
        if(strpos($errorMail,'users.username')){
            $errorPass [] = "Usuario ya existe";

        }
        if(strpos($errorMail,'users.email')){
            $errorPass [] = "Email ya existe";

        }
    }
    
}else{
    $errorPass [] = "Contraseñas no coinciden";
}}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <form action="formularioregistro.php" method="post" enctype="multipart/form-data">

        Nombre de usuari@: <input type="text" name="username" value="<?php echo $username?>"><br>
        Correo electronico: <input type="email" name="email" value="<?php echo $email?>"> ><br>
        Contraseña: <input type="password" name="password" ><br>
        Confirmar contraseña: <input type="password" name="confirmarContraseña" ><br>
        <a href="login.php">Iniciar Sesión</a>
        <?php 
        if(count($errorPass) > 0){
            foreach ($errorPass as $error){
                echo ($error);
            }
        }
        ?>
        <input type="submit" name="submit" value="Registrarse">

    </form>
</body>
</html>