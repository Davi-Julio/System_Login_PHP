<?php

include_once 'Model/config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema Login</title>
  <link rel="short icon" href="/Imgs//Business growth.gif">
  <link rel="stylesheet" href="/Css//style.css">
</head>

<body>

  <div class="container-form">
    <form class="form1" action="" method="post">
      <label>Já Faz Parte da nossa equipe? <br> Basta Fazer seu Login para acessar nossa plataforma.</label>
      <span id="mssg"></span>
      <input require id="name" type="text" name="name" placeholder="Digite seu Nome:">
      <input required id="email" type="email" name="email" placeholder="Digite seu Email:">
      <input required id="password" type="password" name="password" placeholder="Digite sua Senha:">
      <input id="btn" type="submit" name="login" value="Login">
    </form>
    <!--form1-->

    <form class="form2" action="" method="get">
      <label>Não Faz Parte da nossa equipe? <br> Faça seu cadastro para acessar nossa plataforma.</label>
      <span id="mssg2"></span>
      <input required id="nameCadastro" type="text" name="nameCadastro" placeholder="Digite seu Nome:">
      <input require id="emailCadastro" type="email" name="emailCadastro" placeholder="Digite seu Email:">
      <input required id="passwordCadastro" type="password" name="passwordCadastro" placeholder="Digite sua Senha:">
      <input required id="btnCadastro" type="submit" name="cadastro" value="Cadastra-se">
    </form>
    <!--form2-->

  </div>
  <!--container form-->


  <script src="/JS//script.js"></script>

</body>

</html>