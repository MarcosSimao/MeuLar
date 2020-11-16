<?php
require_once '../config.php';
if($_SERVER['REQUEST_METHOD']==="POST"){
   if(empty($_POST['email'])){
      ControlerStaticActions::EchoEmpty("E-mail"); 
   }else{
       $email=$_POST['email'];
        echo "Enviamos email para ".$email;
   }
}


