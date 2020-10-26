<?php
require_once '../config.php';
if($_SERVER['REQUEST_METHOD']==="POST"){
 if(empty($_POST['nome'])){
     ControlerStaticActions::EchoEmpty("nome");
 }else if(empty($_POST['cpf'])){
    ControlerStaticActions::EchoEmpty("cpf"); 
 }else if(empty($_POST['email'])){
     ControlerStaticActions::EchoEmpty("email");
 }else if(empty($_POST['senha'])){
     ControlerStaticActions::EchoEmpty("senha");
 }else if(empty($_POST['endereco'])){
     ControlerStaticActions::EchoEmpty("endereco");
 }else if(empty($_POST['bairro'])){
     ControlerStaticActions::EchoEmpty("bairro");
 }else if(empty($_POST['cidade'])){
     ControlerStaticActions::EchoEmpty("cidade");
 }else if(empty($_POST['uf'])){
     ControlerStaticActions::EchoEmpty("uf");
 }else if(empty($_POST['cep'])){
   ControlerStaticActions::EchoEmpty("cep");  
 }else if(empty($_POST['contato'])){
   ControlerStaticActions::EchoEmpty("contato");  
 }else if(empty($_FILES['imagem']['name'])){
     echo "Selecione uma imagem";
 }else{
  if(!ControlerStaticActions::validateEmail($_POST['email'])){
  echo " Coloque um Email Valido...";   
 }else if(!ControlerStaticActions::validateCpf($_POST['cpf'])){
     echo "por favor coloque um cpf Valido...";
 }else if(!ControlerStaticActions::validateTel($_POST['contato'])){
     echo "Coloque um numero de telefone  valido...";
    } 
 $imagem=$_FILES['imagem'];
    if(ControlerStaticActions::validImage($imagem)){
       if(ControlerStaticActions::sizeImage($imagem)){
     $diretorio=ControlerStaticActions::uploadImg($imagem, "homer");
     $nome=$_POST['nome'];
     $email=$_POST['email'];
     $senha=$_POST['senha'];
     $endereco=$_POST['endereco'];
     $bairro=$_POST['bairro'];
     $cidade=$_POST['cidade'];
     $uf=$_POST['uf'];
     $cep=$_POST['cep'];
     $contato= ControlerStaticActions::clearNumbers($_POST['contato']);
     $cpf= ControlerStaticActions::clearNumbers($_POST['cpf']);
     if(DaoStaticActions::homerTemporaryCpfExists($cpf)){
         echo "Cpf Ja esta registrado no Sistema !";
     }else if(DaoStaticActions::homerTemporaryEmailExists($email)){
        echo "E-mail ja esta registrado no Sistema"; 
     }else{
     $homer = new TemporaryHomer($nome, $email, $senha, $endereco, $bairro, $cidade, $uf, $cep, $contato, $cpf, $diretorio);
   $insert = new Insert();
  if($insert->insertTemporaryHomer($homer)){
      echo "cadastrado com sucesso";
  }else{
      echo "erro ao cadastrar ";
  }
 } 
       }else{
         echo "so aceitamos imagem menor que 300kb";  
       } 
    }else{
        echo "esse arquivo contem uma extensao invalida... ";
}  
}
}else{
    header('Location: ../view/pages/registerOng/index.html');
}
