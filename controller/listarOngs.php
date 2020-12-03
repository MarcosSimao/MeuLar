<?php
require_once '../config.php';
$uf=$_POST['uf'];
$cidade=$_POST['cidade'];
$select = new Select();
$list=[];
if($list[]=$select->ListarOngs($uf, $cidade)){
  echo json_encode($list);  
}else{
    echo "nenhuma ong cadastrada nessa cidade !";
}






