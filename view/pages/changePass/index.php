<?php
$id=$_GET['id'];
$name=$_GET['name'];

?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../../../global.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="/logo.svg" type="image/x-icon" />

    <title>Editar senha</title>
  </head>
  <body>
    <section>
      <figure>
        <figcaption class="hidden">Recuperar senha</figcaption>
        <img src="../../assets/cadastro_lar.png" alt="Cadastro" />
      </figure>

      <form action="../../../controller/passChange.php" method="POST">
        <h2>Insira sua nova senha</h2>
        <div id="info">
            <input type="hidden" id="id" name="id" value="<?php echo $id ?>"/>
            <input type="hidden" id="name" name="name" value="<?php echo $name ?>"/>
          <label for="pass" class="hidden">Senha</label>
          <input type="password" placeholder="Senha" name="senha" id="pass" />

          <label for="passConfirm" class="hidden">Confirmar Senha</label>
          <input
            type="password"
            placeholder="Confirmar Senha"
            id="passConfirm"
            name="senha1"
          />
        </div>

        <div id="buttonSubmit">
          <input type="submit" value="Editar" id="submitButton" />
        </div>
      </form>
    </section>

    <div id="message" class="hidden"></div>

   
  </body>
</html>

