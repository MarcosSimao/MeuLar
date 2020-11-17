<?php
require_once '../config.php';
if($_SERVER['REQUEST_METHOD']==="POST"){
   if(empty($_POST['email'])){
      ControlerStaticActions::EchoEmpty("E-mail"); 
   }else if(!ControlerStaticActions::validateEmail($_POST['email'])){
  echo " Coloque um Email Valido...";  
  }else{
     $email=$_POST['email'];
     if(DaoStaticActions::ongEmailExists($email)){
         $id= DaoStaticActions::searchIdOngs($email);
        $senha= ControlerStaticActions::passwordGenerator();
        $recoverModel= new RecoverPasswordModel($id, $email,$senha);
        $recover= new RecoverPassword();
        if($recover->insertRecoverOngs($recoverModel)){
            echo "Enviamos o email para ".$email;
        }else{
            echo "erro no cadastro";
        }
     }else{
       echo "email nao esta registrado "; 
     }
  }
}

