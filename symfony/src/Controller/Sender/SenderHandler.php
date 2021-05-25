<?php


namespace App\Controller\Sender;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class SenderHandler implements MessageHandlerInterface
{
    public function __invoke(Sender $sender)
    {

    }

}