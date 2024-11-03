<?php
//include(__DIR__ . '/Model.php');

class Yura   //создалл класс юра.
{
    public $name;
    public $age;

}



$data = $_GET;
var_dump($data);
// 1 Экземпляр класса
$userUra = new Yura();  // экземпляр класса Yura.
$userUra->name = 'Юра Халтура'; // задали свойства переменым в классе
$userUra->age = '73 в перевёртку';

// 2 Экземпляр класса
$requestUser = new Yura();

// присваиваем 2-ум переменым  даные из массива.
$requestUser->name = $data['name']; //  $data  ['name']  yura
$requestUser->age = $data['age']; //  из массива ['age']  = 37


// поместил  Два Обьекта 1 и 2  в массив 
$users = [$userUra, $requestUser];
$users2 = [$requestUser];




//include(__DIR__ . '/View.php');

//var_dump($data);



foreach ($users2 as $usr) {
    echo"<p> Имя: " . $usr->name
        . ' Возраст: ' . $usr->age
        . '</p>'; 



} 

/*
// $users  это массив с двумя 2-я обьектами
foreach ($users as $user)  {
echo "IMA:" . $user->name . "Vozrast" . $user->age

}*/





?>
