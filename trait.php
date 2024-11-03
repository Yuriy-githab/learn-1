<?php




trait Animal {
  public $name;
  public function makeSound() {
    echo "животные издающие звуки."."</br>";
  }
}

trait CanFly {
  public function fly() {
    echo "животные которые летают"."</br>";
  }
}


class Bat {
  use Animal, CanFly;

  public function makeSound() {
    echo "Мыши пищат"."</br>";
  }
}



$bat= new Bat();
$bat->makeSound();

$bat->fly();
$bat->makeSound();








?>



