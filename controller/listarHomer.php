<?php
require_once '../config.php';
$select = new Select();
$list=[];
if($list[]=$select->listrarHomer("PE", "São Lourenço da Mata")){
  echo json_encode($list);  
}else{
    echo "nenhuma ong cadastrada nessa cidade !";
}