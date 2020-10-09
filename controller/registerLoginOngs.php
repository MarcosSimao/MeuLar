<?php
require_once '../config.php';
if($_SERVER['REQUEST_METHOD']==="POST"){
 if(isset($_POST['acao'])){
     if(empty($_POST['email'])){
      ControlerStaticActions::EchoEmpty("email");   
     }else if(empty($_POST['senha'])){
       ControlerStaticActions::EchoEmpty("senha");  
     }else{
       $email=$_POST["email"];
       $senha=$_POST["senha"];
       if(Logins::loginOngs($email, $senha)){
           echo"bem vindo";
       }else{
           echo "email ou senha esta errado !!";
       }
     }
 }else{
     echo "erro no sistema !!";
 } 
 }else{
    header('Location: ../view/weblogin.php');
}

