<?php
require_once '../config.php';
if($_SERVER['REQUEST_METHOD']==="POST"){
if(empty($_POST['email'])){
      ControlerStaticActions::EchoEmpty("email");   
     }else if(empty($_POST['senha'])){
       ControlerStaticActions::EchoEmpty("senha");  
     }else{
       $email=$_POST["email"];
       $senha=$_POST["senha"];
      $recover = new RecoverPassword();
     $id=$recover->passLoginPerson($email, $senha);
     if($id!=0){
         
       header('Location: ../view/pages/changePass/index.php?id='.$id.'&name=person');
     }else{
         echo "helo";
     }
     }
  
 }else{
    echo "Metodo de envio errado , volte para o index";
}

