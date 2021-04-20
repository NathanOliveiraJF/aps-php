<?php

$validator = "";

if(!empty($_POST['ac'])):
  $email = $_POST['email'];
  $password = $_POST['password'];
  $passwordConfirm = $_POST['passwordConfirm'];

  //a) Compara string retorna 0 se forem iguais
  if(strcmp($password, $passwordConfirm) != 0): 
    $validator.= strtoupper("Senhas não são iguais, digite novamente!");
  //b) Retorna a quantidade de caracteres de uma string
  elseif(mb_strlen($password) < 12):
    $validator.= strtoupper("Sua senha deve pelo menos ter 12 caracteres ou mais!");
  endif;
  
  //c) retorna a string com caracteres em letra maiscula
  if($validator == ""): 
    $validator = strtoupper("cadastro realizado com sucesso!");
  endif;
endif;


?>

