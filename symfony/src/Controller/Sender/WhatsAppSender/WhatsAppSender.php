<?php

namespace App\Controller\Sender\WhatsAppSender;

use App\Controller\Sender\Sender;

class WhatsAppSender implements Sender
{

    public function Send($data): string
    {
        return $data;

    }
}