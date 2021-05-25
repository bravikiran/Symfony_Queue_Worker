<?php


namespace App\Controller\Sender;

use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class MessageHandler implements MessageHandlerInterface
{

    public function __invoke(Message $message)
    {
       
    }


}