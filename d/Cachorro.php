<?php
require_once "Animal.php";


class Cachorro extends Animal 
{

  public function __construct(string $peso) {
    $this->peso = $peso;
  }

  public function Atacar() {
    echo 'Morder';
  }

}