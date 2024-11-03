<?php
class Animal 
{
    function dog()
    {
        echo self::class;
    }

}

class Sobaka extends Animal
{

}

class Buldog extends Sobaka
{
    function dog()
    {
        parent::dog();
        echo 'из класса С';
    }
}
$c = new Buldog();
$c->dog();

?>
