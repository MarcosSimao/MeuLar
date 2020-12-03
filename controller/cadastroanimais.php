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
        <form action="registerAnimals.php" method="post" enctype="multipart/form-data">
            nome :<input type="text" name="nome"/>
            sexo :<input type="text" name="sexo"/>
            porte :<input type="text" name="porte"/>
            imagem :<input type="file" name="imagem"/>
            
            <button type="submit">enviar</button>
            </form>
    </body>
</html>
