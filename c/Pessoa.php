<?php 

class Pessoa {
  private string $nome;
  
  public function __get($name)
  {
    if(property_exists('Pessoa', $name)) {
      return $this->$name;
    }
  }

  public function __set($name, $value)
  {
    if(property_exists('Pessoa', $name)) {
      $this->$name = $value;
    }
  }
}