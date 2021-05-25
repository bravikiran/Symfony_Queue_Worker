<?php

namespace App\Controller\EmailMessageHandler;

use App\Controller\EmailMessage\EmailMessage;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class EmailMessageHandler implements MessageHandlerInterface
{

    public function __invoke(EmailMessage $emailMessage)
    {
        $this->displayMessage();

    }

    public function displayMessage()
    {
        return "Message displayed from EmailMessage Handler";
    }
}
