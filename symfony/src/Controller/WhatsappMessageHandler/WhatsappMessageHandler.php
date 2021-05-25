<?php


namespace App\Controller\WhatsappMessageHandler;

use App\Controller\WhatsappMessage\WhatsappMessage;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;


class WhatsappMessageHandler implements MessageHandlerInterface {

    protected $whatsappMessage;


    public function __invoke(WhatsappMessage $whatsappMessage)
    {
        // ... do some work - like sending an Whatsapp message!
    }
}