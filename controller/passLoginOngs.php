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
      echo "bem-vindo";
     }
  
 }else{
    echo "Metodo de envio errado , volte para o index";
}

