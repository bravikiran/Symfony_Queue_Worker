<?php

namespace App\Controller\Sender;

use App\Controller\Sender\EmailSender\EmailSender;
use App\Controller\Sender\SMSSender\SMSSender;
use App\Controller\Sender\WhatsAppSender\WhatsAppSender;

class Receiver
{
    public function __construct()
    {
        $emailMessage = new Message('Hello send over email', new EmailSender());
        $sms_message = new Message('Hello send over sms', new SMSSender());
        $whatsapp_message = new Message('Hello send over whatsapp', new WhatsAppSender());

//        $emailMessage->sendMessage();
        $this->receive($emailMessage);
        $this->receive($sms_message);
        $this->receive($whatsapp_message);
    }

    public function receive(Message $message){

//        $data = $message->getData();
//        $sender = $message->getSender();
        $message->sendMessage();
//        $sender->send($data);
    }

}