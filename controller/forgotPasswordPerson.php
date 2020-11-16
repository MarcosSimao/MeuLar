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
        
        echo $id;
        echo "<br/>";
        echo $email;
         echo "<br/>";
        echo $senha;
     }else{
       echo "email nao esta registrado "; 
     }
  }
}

