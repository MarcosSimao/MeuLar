<?php
require_once '../config.php';
session_start();
$disponivel=$_POST['valor'];
$id=$_SESSION['id_homer'];
$update = new Update();

$update->updateDisponivelHomer($id,$disponivel);


