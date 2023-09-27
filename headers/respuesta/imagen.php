<?php

$letMeIn = $_GET['letMeIn'] ?? "0";

$imagen = $_GET['imagen'] ?? "noPasas.png";

header("Content-type: image/png");

if ($letMeIn == '1'){
    if (file_exists("/home/alumno/Escritorio/DWES_Introduccion/headers/respuesta/img/$imagen")){
    imagepng(imagecreatefrompng("/home/alumno/Escritorio/DWES_Introduccion/headers/respuesta/img/$imagen"));
        }else{
    http_response_code(404);
    imagepng(imagecreatefrompng("/home/alumno/Escritorio/DWES_Introduccion/headers/respuesta/img/noPasar.png"));
}}else{
    http_response_code(401);
    imagepng(imagecreatefrompng("/home/alumno/Escritorio/DWES_Introduccion/headers/respuesta/img/noPasar.png"));
}

?>