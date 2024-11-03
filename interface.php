<?php


interface SenderInterface
{
    public function send($message);
}


trait SenderTrait
{
   public function send($message)
    {
       echo $message;
    }
}


class Mail implements SenderInterface
{
   use SenderTrait;

}



class Telegram implements SenderInterface
{
   use SenderTrait;

}



function client(SenderInterface $sender)
{
    $sender->send('Привет Yura');
}


$sender = new Telegram();
client($sender);



?>
