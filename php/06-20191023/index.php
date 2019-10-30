<?php

class Person
{
  public $name;
  // camelCase - function name
  public function setName($ten)
  {
    // ["name" => "Nam"] - associative array
    $this->name = $ten;
  }

  public function getName()
  {
    return $this->name;
  }

  public function tiengHet()
  {
    echo "EC EC";
  }
}

$nam = new Person();
$nam->setName('Nam');
echo $nam->getName();

$vu = new Person();
$vu->setName('Vu dai ca');
echo $vu->getName();

$nam->tiengHet();
$vu->tiengHet();

$n = ["name" => "Nam", "tiengHet" => "ec"];
$vu = ["name" => "Vu", "tiengHet" => "ec ec"];