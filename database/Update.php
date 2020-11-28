<?php
class Update extends PDO{
    private $connection;
   public function __construct() {
     $this->connection=Conexao::conectBanco();
       }
}
