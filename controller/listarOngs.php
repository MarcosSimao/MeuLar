<?php
require_once '../config.php';
$uf=$_POST['uf'];
 $cidade=$_POST['cidade'];
 $select = new Select();
$list=[];
echo json_encode($select->ListarOngs($uf, $cidade));







