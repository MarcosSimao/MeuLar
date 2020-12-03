<?php
session_start();
require_once '../config.php';
if($_SERVER['REQUEST_METHOD']==="POST"){
 if(empty($_POST['nome'])){
     ControlerStaticActions::EchoEmpty("nome");
 }else if(empty($_POST['sexo'])){
    ControlerStaticActions::EchoEmpty("sexo"); 
 }else if(empty($_POST['porte'])){
     ControlerStaticActions::EchoEmpty("porte");
 }else{ 
     $imagem=$_FILES['imagem'];
    if(ControlerStaticActions::validImage($imagem)){
       if(ControlerStaticActions::sizeImage($imagem)){
     $diretorio=ControlerStaticActions::uploadImg($imagem, "animals");
     $id=$_SESSION['id_Ong'];
     $nome=$_POST['nome'];
     $sexo=$_POST['sexo'];
     $porte=$_POST['porte'];
     $animais = new Animals($nome, $porte, $sexo, $diretorio);
     $insert = new Insert();
     if($insert->insertAnimals($animais, $id)){
         echo "cadastrado com sucesso";
     }else{
         echo "erro no cadastro";
     }
  
     
 }else{
         echo "so aceitamos imagem menor que 300kb";  
       } 
    }else{
        echo "esse arquivo contem uma extensao invalida... ";
    }
     }
}else{
    echo "erro";
}


   

