<?php

namespace App\Controller\Sender;

interface Sender
{
    public function Send($data): string;

}