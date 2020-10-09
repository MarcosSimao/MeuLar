<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>LOGIN PESSOA</h1>
        <form action="../controller/registerLoginPerson.php" method="POST" >
            <input type="hidden" name="acao">
            <input type="text" name="email">
            <input type="password" name="senha">
            <button type="submit"></button>
        </form>
         <h1>LOGIN Ongs</h1>
        <form action="../controller/registerLoginOngs.php" method="POST" >
            <input type="hidden" name="acao">
            <input type="text" name="email">
            <input type="password" name="senha">
            <button type="submit"></button>
        </form>
          <h1>LOGIN HOMER</h1>
        <form action="../controller/registerLoginsHomer.php" method="POST" >
            <input type="hidden" name="acao">
            <input type="text" name="email">
            <input type="password" name="senha">
            <button type="submit"></button>
        </form>
    </body>
</html>
