<?php
ssion_start();
require_once '../config.php';
$id=$_SESSION['id_Ong'];
$select = new Select();
$list=[];
if($list[]=$select->selectAnimals($id)){
   echo json_encode($list); 
}else{
    echo "nao ha animais cadastrado nessa ong";
}






