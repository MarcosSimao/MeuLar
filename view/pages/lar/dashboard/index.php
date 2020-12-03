<?php
session_start();
if(!$_SESSION['homer']){
    header('location:../../../../index.php'); 
  }else{
    
  }
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../../../../global.css" />
    <link rel="stylesheet" href="../../../components/menuDashboard/style.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="../../../../logo.svg" type="image/x-icon" />

    <title>Dashboard</title>
  </head>
  <body>
    <div id="container">
      <section>
        <h1>Suas informações</h1>
        <div id="info"></div>

        <button>Alterar disponibilidade</button>
      </section>

      <div id="content">
        <h1>Bem vindo</h1>
        <img src="../../../assets/dashboard_home.svg" />
      </div>
    </div>

    <script src="../../../components/menuDashboard/index.js"></script>
    <script src="./script.js"></script>
  </body>
</html>
