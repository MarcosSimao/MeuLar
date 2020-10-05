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
        <form action="../controller/resisterPerson.php" method="POST" >
            <p><input type="hidden" name="acao"/></p>
            <p>NOme:<input type="text" name="nome"/></p>
            <p>Cpf<input type="text" name="cpf"/></p>
            <p>Email:<input type="text" name="email"/></p>
            <p>senha: <input type="text" name="senha"/></p>
            <p>Endereco<input type="text" name="endereco"/></p>
            <p>Bairro: <input type="text" name="bairro"/></p>
            <p>Cidade:<input type="text" name="cidade"/></p>
            <p>Uf:<input type="text" name="uf"/></p>
            <p>Cep: <input type="text" name="cep"/></p>
            <p>Contato:<input type="text" name="contato"/></p>
            <button type="submit" >enviar</button>
            
            
        </form>
    </body>
</html>
