<?php
// 1 класс
class Animal {
  public $name;


  public function makeSound() {
    echo "животное издаёт звуки";
  }
}


//2 класс
class Cat extends Animal {

  public function makeMeow() {
    echo "МЯУ!";
  }

}

// этом примере Cat является дочерним классом Animal. Он наследует свойство $name и метод makeSound() от Animal, а также добавляет свой собственный метод meow().



$animal = new Cat();
echo "</br>";
$animal->makeSound(); //животное издаёт звуки
echo "</br>";
$animal->makeMeow(); // МЯУ!
echo "</br>";

echo $animal->name = "Малыш"."</br>"; // малыш
echo "</br>";








?>
