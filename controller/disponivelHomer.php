<?php
require_once '../config.php';
session_start();
$id=$_SESSION['id_homer'];
$select = new Select();
if($select->disponivelHomer($id)){
    echo "true";
}else{
 echo "false";   
}


