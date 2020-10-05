<?php
require_once '../config.php';
$homer = new TemporaryHomer("Francisco oliveira","francisco@hotmail.com","avanade","Rua clovis domingos","carpina","Recife","CE","3445534","99938474","23232323","foto.jpg",5);
$insert = new Insert();
if($insert->insertTemporaryHomer($homer)){
    echo "cadastrado com sucesso !!";
}else{
    echo"erro ao efetuar cadastro";
}
