<?php
require_once '../config.php';
session_start();
$id=$_SESSION['id_Ong'];
$disponivel=$_POST['valor'];
$update = new Update();

$update->updateDisponivelOng($id,$disponivel);

