<?php

class Person {
  public $name;
  public $age;

// 1
  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }
//


//2
  public function sayHello() {
    echo "моё имя ".$this->name." и мой ".$this->age." возвраст";
  }
//


}


$person1 = new Person(1,2);


$person1->sayHello(); //вызываем метод Приветствие.



?>
