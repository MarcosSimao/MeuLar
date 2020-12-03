<?php
session_start();
$arr=[];
$arr["nome"]=$_SESSION['nomeH'];
$arr["email"]=$_SESSION['emailH'];
$arr["contato"]=$_SESSION['contatoH'];


echo json_encode($arr);

