<?php

namespace App\Controller\Sender;

class Message
{
    public $data;
    public $sender;

    public function __construct(string $data, Sender $sender)
    {
        $this->data = $data;
        $this->sender = $sender;
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function getSender(): Sender
    {
        return $this->sender;
    }

    public function sendMessage()
    {
        $this->sender->Send($this->data);
    }

}