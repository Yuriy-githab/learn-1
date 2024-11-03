<?php

class Config
{
    // Включение трейта в класс
    use Magic;
}

$config = new Config();
$config->key = 'value';
echo $config->key;
?>
