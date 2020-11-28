<?php
require_once '../config.php';
class RecoverPassword extends PDO{
private $connection;
 public function __construct() {
    $this->connection=Conexao::conectBanco(); 
}  
 public function insertRecoverPerson(RecoverPasswordModel $person):bool{
     $sql='INSERT INTO passwordtemppessoa (id_pessoa,email,senha) values(:ID,:EMAIL,:SENHA)';
    try{
        $sqls=$this->connection->prepare($sql);
        $sqls->bindValue(':ID',$person->getId(),PDO::PARAM_INT);
        $sqls->bindValue(':EMAIL',$person->getEmail(),PDO::PARAM_STR);
        $sqls->bindValue(':SENHA',$person->getPassword(),PDO::PARAM_STR);
        if($sqls->execute()>0){
          return true;
       }else{
           return false;
       }
    } catch (Exception $ex) {
      return false; 
    }
}
public function insertRecoverOngs(RecoverPasswordModel $ongs):bool{
  $sql='INSERT INTO passwordtempongs (id_ongs,email,senha) values(:ID,:EMAIL,:SENHA)';
    try{
        $sqls=$this->connection->prepare($sql);
        $sqls->bindValue(':ID',$ongs->getId(),PDO::PARAM_INT);
        $sqls->bindValue(':EMAIL',$ongs->getEmail(),PDO::PARAM_STR);
        $sqls->bindValue(':SENHA',$ongs->getPassword(),PDO::PARAM_STR);
        if($sqls->execute()>0){
          return true;
       }else{
           return false;
       }
    } catch (Exception $ex) {
      return false; 
    }  
}
public function insertRecoverHomer(RecoverPasswordModel $homer):bool{
  $sql='INSERT INTO passwordtemphomer (id_homer,email,senha) values(:ID,:EMAIL,:SENHA)';
    try{
        $sqls=$this->connection->prepare($sql);
        $sqls->bindValue(':ID',$homer->getId(),PDO::PARAM_INT);
        $sqls->bindValue(':EMAIL',$homer->getEmail(),PDO::PARAM_STR);
        $sqls->bindValue(':SENHA',$homer->getPassword(),PDO::PARAM_STR);
        if($sqls->execute()>0){
          return true;
       }else{
           return false;
       }
    } catch (Exception $ex) {
      return false; 
    }  
}

public function passLoginPerson($email,$senha):int{
    $sql="SELECT id,id_pessoa FROM passwordtemppessoa WHERE email=:EMAIL AND senha=:SENHA";
      try{
        $sqls=$this->connection->prepare($sql);
        $param=array(
           ":EMAIL"=>$email,
            ":SENHA"=>$senha
        );
      $sqls->execute($param);
      if($sqls->rowCount()>0){   
      
     $exib = $sqls->fetch(PDO::FETCH_ASSOC);
     $exib['id'];
     $id= $exib['id_pessoa'];
     return $id;
    }else{
        return 0;
    }
     } catch (PDOException $ex) {
     return 0;
     }
    
}
    
}
