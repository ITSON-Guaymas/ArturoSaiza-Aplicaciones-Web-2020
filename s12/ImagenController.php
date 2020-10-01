<?php

$data =$_POST;

if( isset( $data["nombre_imagen"] ) ){
    $imagen_temp = $_FILES["imagen"]["tmp_name"];
    //$imagen_nombre = $_FILES["imagen"]["name"];
    $imagen_nombre = $data["nombre_imagen"];
    $ruta ="imagenes/perfil/";
   
   // $extencion =   explode("/", $_FILES["imagen"]["type"]);
   // $extencion = $extencion[1];
    $extencion =   explode("/", $_FILES["imagen"]["type"])[1];

    $imagesize= getimagesize($imagen_temp);
    
    if($imagesize){ 
       
        //print_r($data);
        //echo "<pre>"; print_r($_FILES); echo "</pre>";
        move_uploaded_file($imagen_temp, $ruta.$imagen_nombre.".".$extencion);
    echo " <img style='width:100%;' src='$ruta$imagen_nombre.$extencion' />  ";   

    }else{
        echo "Tu archivo no es una imagen";
    }




}



