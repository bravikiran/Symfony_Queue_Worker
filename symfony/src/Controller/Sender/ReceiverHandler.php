<?php

namespace App\Controller\Sender;

use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class ReceiverHandler implements MessageHandlerInterface
{

    public function __invoke(Receiver $receiver)
    {
       
    }

}