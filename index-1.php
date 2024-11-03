<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

//echo "hello word";


class Animal 
{

    protected $color;
    public $name;
    protected $voice;
    
    public function __construct($color, $name = 'noname', $voice = null)
    {
        $this->color = $color;
        $this->name = $name;
        $this->voice = $voice;
    }

    public function getColor()  
    {
        return $this->color;
    }
    
    public function getVoice()
    {
        return $this->voice;
    }


}

class Cat extends Animal
{

    public function __construct($color, $name = 'noname')
    {
        $this->color = $color;
        $this->name = $name;
        $this->voice = 'mau';
    }


}



$animal = new Animal('black');
$animal->name = "druzok";


//echo $animal->getColor() . "</br>";
//echo $animal->name . "</br>";


$redAnimal = new Animal('red','vaska');
//echo $redAnimal->getColor() . "</br>";
//echo $redAnimal->name . "</br>";

$whiteAnimal = new Animal('white');
//echo $whiteAnimal->getColor() . "</br>";
//echo $whiteAnimal->name . "</br>";

$cat = new Cat('blue','malish');

$animals = [
    $animal,
    $redAnimal,
    $whiteAnimal,
    $cat
];

foreach ($animals as $item) {
    echo $item->getColor() . "</br>";
    echo $item->name . "</br>";
    echo $item->getVoice() . "</br>";
}




?>
