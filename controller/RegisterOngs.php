<?php
require_once '../config.php';
$ongs = new Ongs("CATSONLINE","cats@hotmail.com","23456","rua olimpo","tanajura","Olinda","PE", "4453333","0999444","11133333",2,"foto.jpg");
$insert = new Insert();
if($insert->insertOngs($ongs)){
    echo "cadastrado com sucesso!!";
}else{
    echo "nao podemos efetuar o cadastro";
}
