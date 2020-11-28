<?php
require_once '../config.php';
class UpdateRecoverPass {
    private $connection;
   public function __construct() {
     $this->connection=Conexao::conectBanco();
       }
  public function updateRecoverPerson($id,$senha):bool{
     $sql='update pessoa set senha=:SENHA where id=:ID' ; 
     try{
         $sql= $this->connection->prepare($sql);
          $sql->bindValue(':SENHA',$senha,PDO::PARAM_STR);
           $sql->bindValue(':ID',$id,PDO::PARAM_STR);
          if($sql->execute()>0){
          return true;   
          }
          
     } catch (Exception $ex) {
       return false;
     }
          
  }     
}
