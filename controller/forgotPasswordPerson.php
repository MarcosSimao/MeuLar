<?php
require_once '../config.php';
if($_SERVER['REQUEST_METHOD']==="POST"){
   if(empty($_POST['email'])){
      ControlerStaticActions::EchoEmpty("E-mail"); 
   }else if(!ControlerStaticActions::validateEmail($_POST['email'])){
  echo " Coloque um Email Valido...";  
  }else{
     $email=$_POST['email'];
     if(DaoStaticActions::personEmailExists($email)){
         $id= DaoStaticActions::searchIdPerson($email);
        $senha= ControlerStaticActions::passwordGenerator();
        $recoverModel= new RecoverPasswordModel($id, $email,$senha);
        $recover= new RecoverPassword();
        if($recover->insertRecoverPerson($recoverModel)){
            $enviarEmail= new Email();
            $link="http://localhost/MeuLar/view/pages/passRecover/user.html";
           if($enviarEmail->enviar($email, $senha,$link)){
            echo "Enviamos o email para ".$email;   
           }else{
               echo "erro ao enviar o email";
           }
            
            
        }else{
            echo "erro no cadastro";
        }
     }else{
       echo "email nao esta registrado "; 
     }
  }
}

