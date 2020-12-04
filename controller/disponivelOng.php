<?php
require_once '../config.php';
session_start();
$id=$_SESSION['id_Ong'];
$select = new Select();
if($select->disponivelOng($id)){
    echo "true";
}else{
    echo "false";
}

