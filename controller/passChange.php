<?php
require_once '../config.php';
if($_SERVER['REQUEST_METHOD']==="POST"){
if(empty($_POST['senha'])){
    ControlerStaticActions::EchoEmpty("nova senha");
}else if(empty($_POST['senha1'])){
    ControlerStaticActions::EchoEmpty("repetir senha");
}else{
    $id=$_POST['id'];
    $senha=$_POST['senha'];
    $senha1=$_POST['senha1'];
    $recover = new UpdateRecoverPass();
    if($senha!=$senha1){
        echo "erro !! senha diferente ! ";
    }else{
     if($_POST['name']=="person"){
        if($recover->updateRecoverPerson($id,$senha)){
            echo "alterada com sucesso";
        }else{
            echo "erro no cadastro ";
        }
    }else if($_POST['name']=="ongs"){
        
    }else if($_POST['name']=="homer"){
        
    }else{
        echo "erro no sistema";
    }
     }
}

 }else{
    echo "Metodo de envio errado , volte para o index";
}



