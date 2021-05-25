<?php 

namespace App\Controller\WhatsappMessage;


class WhatsappMessage {
    private $id;

    private $msg;

    public function __construct(int $id, string $msg)
    {
        $this->id = $id;
        $this->msg = $msg;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getMsg(): string
    {
        return $this->msg;
    }
}