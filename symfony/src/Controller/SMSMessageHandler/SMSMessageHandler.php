<?php

namespace App\Controller\SMSMessageHandler;

use App\Controller\SMSMessage\SMSMessage;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class SMSMessageHandler implements MessageHandlerInterface
{
    public function __invoke(SMSMessage $message)
    {
        
    }
}