<?php

namespace App\Controller\Sender\EmailSender;

use App\Controller\Sender\Sender;

class EmailSender implements Sender
{
    public function Send($data): string
    {
        return $data;
    }

}