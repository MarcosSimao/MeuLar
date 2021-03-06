<?php
session_start();  
if($_SESSION['ong']){
  header('location:../ong/dashboard/index.php'); 
  }else if($_SESSION['homer']){
    header('location:../lar/dashboard/index.php');  
   }else{
      
  }

?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../../../global.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="../../components/menu/style.css" />
    <link rel="shortcut icon" href="/logo.svg" type="image/x-icon" />

    <title>Cadastro</title>
  </head>

  <body>
    <div id="content">
      <form>
        <div id="aside-left">
          <h1>Cadastro de Lares Temporários</h1>
          <p>Insira suas informações</p>
          <div id="account-main">
            <input type="text" placeholder="Nome" id="name" required />
            <input
              type="text"
              placeholder="CPF"
              id="cpf"
              required
              maxlength="14"
            />
            <input
              type="text"
              placeholder="Contato"
              id="contact"
              required
              maxlength="15"
            />
          </div>

          <div id="address">
            <input
              type="text"
              placeholder="CEP"
              id="cep"
              required
              maxlength="9"
            />
            <input type="text" placeholder="Endereço" id="street" required />
            <input
              type="text"
              placeholder="Bairro"
              id="neighborhood"
              required
            />
            <input type="text" placeholder="Cidade" id="city" required />
            <select id="uf">
              <option value="none">UF</option>
            </select>
          </div>

          <div id="account-info">
            <input type="email" id="email" placeholder="E-mail" required />
            <input
              type="password"
              id="pass"
              placeholder="Senha até 13 caracteres"
              maxlength="13"
              required
            />
            <input
              type="password"
              id="passConfirm"
              placeholder="Confirmar Senha"
              maxlength="13"
              required
            />
          </div>
        </div>

        <div id="aside-rigth">
          <div id="lateral">
            <label id="img" for="sendImg">
              <img src="../../assets/plus.svg" alt="Adicionar Imagem" />
              Adicionar imagem
            </label>
            <input type="file" id="sendImg" name="imagem" />
          </div>
        </div>
      </form>
      <input type="submit" value="Cadastrar" id="send" />
    </div>

    <div id="message" class="hidden"></div>

    <script src="../../components/menu/index.js"></script>
    <script src="../../utils/getInfo.js"></script>
    <script src="../../utils/validation.js"></script>
    <script src="../../utils/masks.js"></script>
    <script src="registerLar.js"></script>
  </body>
</html>
