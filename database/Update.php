<?php
class Update extends PDO{
    private $connection;
   public function __construct() {
     $this->connection=Conexao::conectBanco();
       }
       
        public function updateDisponivelOng($id,$dispo):void{
     $sql='update ongs set disponivel=:DISPONIVEL where id=:ID' ; 
     try{
         $sql= $this->connection->prepare($sql);
          $sql->bindValue(':DISPONIVEL',$dispo,PDO::PARAM_STR);
           $sql->bindValue(':ID',$id,PDO::PARAM_STR);
          if($sql->execute()>0){
          echo "cadastrado";   
          }
          
     } catch (Exception $ex) {
       echo "".$exe;
     }
          
  } 
    public function updateDisponivelHomer($id,$dispo):void{
     $sql='update lartemporario set disponivel=:DISPONIVEL where id=:ID' ; 
     try{
         $sql= $this->connection->prepare($sql);
          $sql->bindValue(':DISPONIVEL',$dispo,PDO::PARAM_STR);
           $sql->bindValue(':ID',$id,PDO::PARAM_STR);
          if($sql->execute()>0){
          echo "rcadastrado";   
          }
          
     } catch (Exception $ex) {
       echo "".$exe;
     }
          
  } 
}
