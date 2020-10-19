<?php
require_once '../config.php';
$imagem=$_FILES["imagem"];

if(!$imagem["name"]==''){
    if(ControlerStaticActions::validImage($imagem)){
       if(ControlerStaticActions::sizeImage($imagem)){
         $diretorio=ControlerStaticActions::uploadImg($imagem, "animals");
        echo $diretorio;
       }else{
         echo "so aceitamos imagem menor que 300kb";  
       } 
    }else{
        echo "esse arquivo contem uma extensao invalida... ";
    }
}else{
   echo "Selecione uma imagem"; 
}


