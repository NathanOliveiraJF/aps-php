<?php include 'validator.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Exemplo script</title>
</head>

<body>
  <h1>Cadastro teste script</h1>
  <p><?= $validator  ?></p>
  <form method="POST" action="">
    <input type="hidden" name="ac" value="teste">
    <label>Email</label>
    <input type="text" name="email" />
    <br>
    <br>
    <label>Senha</label>
    <input type="password" name="password" />
    <br>
    <br>
    <label>Confirmar senha</label>
    <input type="password" name="passwordConfirm" />
    <br>
    <br>
    <input type="submit" value="Cadastrar">
  </form>

</body>

</html>