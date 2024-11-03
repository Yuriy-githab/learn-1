<?php
include(__DIR__ . '/Model.php');

$data = $_GET;

$userUra = new User();
$userUra->name = 'Юра';
$userUra->age = '55';

$requestUser = new User();
$requestUser->name = $data['name'];
$requestUser->age = $data['age'];

$users = [$userUra, $requestUser];

include(__DIR__ . '/View.php');
?>
