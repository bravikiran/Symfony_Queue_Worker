<?php

namespace App\Controller\Sender\SMSSender;

use App\Controller\Sender\Sender;

class SMSSender implements Sender
{

    public function Send($data): string
    {
        return $data;
    }

}