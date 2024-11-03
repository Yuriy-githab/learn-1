<?php
echo "Трейты // Magic.php</br>";


trait Magic 
{
    public $val;

    public function parse($key)
    {
        return $key . ' парсинг';
    }

}

class Stol 
{
use Magic;

}

class Karti 
{
use Magic;
}

$stol = new Stol();
echo $stol->parse('A-tuz');








?>
