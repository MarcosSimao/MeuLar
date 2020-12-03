<?php
 session_start();
class Logins {
public static function loginPerson($email,$senha):bool{
     $sql="SELECT email,senha FROM pessoa WHERE email=:EMAIL AND senha=:SENHA";
      try{
        $sqls= Conexao::conectBanco()->prepare($sql);
        $param=array(
           ":EMAIL"=>$email,
            ":SENHA"=>$senha
        );
      $sqls->execute($param);
    if($sqls->rowCount()>0){
        
        return true;
    }else{
        return false;
    }
     } catch (PDOException $ex) {
     header('Location: ../view/error.php');
     }
    }
  public static function loginOngs($email,$senha):bool{
     $sql="SELECT id,nome,email,senha FROM ongs WHERE email=:EMAIL AND senha=:SENHA";
      try{
        $sqls= Conexao::conectBanco()->prepare($sql);
        $param=array(
           ":EMAIL"=>$email,
            ":SENHA"=>$senha
        );
      $sqls->execute($param);
    if($sqls->rowCount()>0){
         $exib=$sqls->fetch(PDO::FETCH_ASSOC);
         $_SESSION['ong'] =true;
         $_SESSION['id_Ong']=$exib['id'];
       $_SESSION['nomeO'] =$exib['nome'];
       $_SESSION['emailO'] =$exib['email'];
       return true;
        
    }else{
        return false;
    }
     } catch (PDOException $ex) {
     header('Location: ../view/error.php');
     }
 }
 public static function loginHomer($email,$senha):bool{
     $sql="SELECT id,nome,email,senha,contato FROM lartemporario WHERE email=:EMAIL AND senha=:SENHA";
      try{
        $sqls= Conexao::conectBanco()->prepare($sql);
        $param=array(
           ":EMAIL"=>$email,
            ":SENHA"=>$senha
        );
        
      $sqls->execute($param);
    if($sqls->rowCount()>0){
         $exib=$sqls->fetch(PDO::FETCH_ASSOC);
         $_SESSION['homer'] =true;
         $_SESSION['id_homer']=$exib['id'];
       $_SESSION['nomeH'] =$exib['nome'];
       $_SESSION['emailH'] =$exib['email'];
       $_SESSION['contatoH']=$exib['contato'];
        return true;
    }else{
        return false;
    }
     } catch (PDOException $ex) {
     header('Location: ../view/error.php');
     }
    
 }
}
