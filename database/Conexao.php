<?php
final class Conexao {
    private static $pdo;
      private const HOST="localhost";
    private const BD="meular";
    private const USER="root";
    private const PASSWORD="";
    
public static function conectBanco(){
    if(self::$pdo==null){
       try{
          self::$pdo = new PDO("mysql:host=".Conexao::HOST.";dbname=".Conexao::BD,Conexao::USER,Conexao::PASSWORD);
          self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
       } catch (Exception $ex) {
         echo 'erro na conexao';
       } 
      return self::$pdo;
    }
}
}

 Conexao::conectBanco();