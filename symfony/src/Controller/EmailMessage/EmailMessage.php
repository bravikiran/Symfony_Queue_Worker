<?php

namespace App\Controller\EmailMessage;

class EmailMessage
{
    private $userName;

    public function __construct(string $userName)
    {
        $this->userName = $userName;
    }

    public function getUserName(): string
    {
        return $this->userName;
    }
}