<?php


namespace App\Controller\Sender;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class SenderHandler implements MessageHandlerInterface
{
    /**
     * @param Sender $sender
     * @return Response
     */
    public function __invoke(Sender $sender): Response
    {
        return new Response('SenderHandlerInterface');
    }

}