<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    

    Hola <?php echo $_POST['nombre']?> bienvenid@! <br>
    Email: <?php echo $_POST['email']?> <br>
    Estudios: <?php echo $_POST['educacion']?> <br>
    

    <?php
   $directorioSubida = "uploads/";

   $max_file_size = "512008888";
   
   $extensionesValidas = array("jpg", "png", "gif");
 
   
   if(isset($_POST["submit"]) && isset($_FILES['imagen'])){
    print_r($_FILES['imagen']);
   
       $errores = array();
   
       $nombreArchivo = $_FILES['imagen']['name'];
   
       $filesize = $_FILES['imagen']['size'];
   
       $directorioTemp = $_FILES['imagen']['tmp_name'];
   
       $tipoArchivo = $_FILES['imagen']['type'];
   
       $arrayArchivo = pathinfo($nombreArchivo);
   
       $extension = $arrayArchivo['extension'];
   
       // Comprobamos la extensión del archivo
   
       if(!in_array($extension, $extensionesValidas)){
   
           $errores[] = "La extensión del archivo no es válida o no se ha subido ningún archivo";
   
       }
   
       // Comprobamos el tamaño del archivo
   
       if($filesize > $max_file_size){
   
           $errores[] = "La imagen debe de tener un tamaño inferior a 50 kb";
   
       }
   
       // Comprobamos y renombramos el nombre del archivo
   
       $nombreArchivo = $arrayArchivo['filename'];
   
       $nombreArchivo = preg_replace("/[^A-Z0-9._-]/i", "_", $nombreArchivo);
   
       $nombreArchivo = $nombreArchivo . rand(1, 100);
   
       // Desplazamos el archivo si no hay errores
   
       if(empty($errores)){
   
           $nombreCompleto = $directorioSubida.$nombreArchivo.".".$extension;
   
           move_uploaded_file($directorioTemp, $nombreCompleto);
   
           print "El archivo se ha subido correctamente";
   
       }else{
        print_r($errores);
       }
   
   } 
    
    ?>
    <?php
        echo ($nombreCompleto);
    ?>

    <img src="<?= $nombreCompleto?>" alt="imagen"> 

</html>