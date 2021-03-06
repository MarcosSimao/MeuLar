<?php 
session_start();  
if($_SESSION['ong']){
   header('location:view/pages/ong/dashboard/index.php'); 
  }else if($_SESSION['homer']){
    header('location:view/pages/lar/dashboard/index.php');  
   }else{
      
  }
    
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="global.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="./view/components/menu/style.css" />
    <link rel="shortcut icon" href="logo.svg" type="image/x-icon" />

    <title>Meu Lar</title>
  </head>
  <body>
    <p>
      <span
        >Selecione a UF:
        <select id="uf">
          <option value="none">UF</option>
        </select>
      </span>
      <span
        >Selecione a Cidade:
        <select id="city">
          <option value="none">Cidade</option>
        </select>
      </span>
      <button id="searchOngs">Procurar por Ongs</button>
      <button id="searchLares">Procurar por Lares Temporários</button>
    </p>

    <div id="info">
      <div id="slider"></div>
    </div>

    <script
      src="https://kit.fontawesome.com/3765ed8b9e.js"
      crossorigin="anonymous"
    ></script>
    <script src="./view/utils/getInfo.js"></script>
    <script src="./view/components/menu/index.js"></script>
    <script src="./script.js"></script>
  </body>
</html>
