<?php

require_once 'Pessoa.php';

  $pessoa = new Pessoa();

  $ok = false;
  if(!empty($_POST['nome'])):
    $pessoa->nome = $_POST['nome'];
    $ok = true;
  endif;

  
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Questao c</title>
</head>
<body>
  <h1>Exemplo metodos mágicos get e set</h1>
  <h2>Total caracteres do nome</h2>
  <form method="POST" action="">
    <label>Seu Nome</label>
    <input type="text" name="nome" id="">

    <button type="submit">Enviar</button>
  </form>
  <br>
  <?php
    if($ok):
        echo '<p>Resultado</p>';
        echo 'Seu nome :: '. $pessoa->nome.'<br>';
        echo 'Total de caracteres :: '. mb_strlen($pessoa->nome).'<br>';
    endif;
  ?>
</body>
</html>