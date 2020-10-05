<?php
require_once '../config.php';
$animals= new Animals("bob", "grande", "macho", "labrador", "Saudavel", "dog.jpg");
$insert= new Insert();
if($insert->insertAnimals($animals, 4)){
    echo"cadastrado com sucesso !!";
}else{
   echo "erro ao cadastrar !!"; 
}

