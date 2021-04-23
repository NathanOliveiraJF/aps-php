<?php
require_once "Animal.php";
require_once "Ave.php";

class Papagaio extends Animal implements Ave
{

  public function __construct(string $peso) {
    $this->peso = $peso;
  }

  public function Atacar() {
    echo 'Bicar';
  }

  public function Altitude() {
    echo "Voando há 4 Metros";
  }
}