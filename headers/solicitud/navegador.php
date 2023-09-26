<?php
     
     $navegador = $_SERVER['HTTP_USER_AGENT'];
     print_r($_SERVER);
     
  
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

<?php
   if (strpos($navegador,"Firefox") == false ) :
    ?>

      

<p>ERROR 404 NOT FOUND</p> 

<?php else:
    
    ?>
    <p>Bievenido</p> <?php endif ?>

</body>
</html>