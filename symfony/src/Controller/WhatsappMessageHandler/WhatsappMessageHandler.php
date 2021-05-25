<?php


namespace App\Controller\WhatsappMessageHandler;

use App\Controller\WhatsappMessage\WhatsappMessage;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;


class WhatsappMessageHandler implements MessageHandlerInterface {


    public function __invoke(WhatsappMessage $whatsappMessage)
    {
        // sending an Whatsapp message!
    }
}