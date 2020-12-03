<?php
session_start();
$arr=[];
$arr["nome"]= $_SESSION['nomeO'];
$arr["email"]=$_SESSION['emailO'];

echo json_encode($arr);



