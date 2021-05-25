<?php

namespace App\Controller;

use App\Controller\Sender\Receiver;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;
// use Symfony\Component\Messenger\Transport\AmqpExt\AmqpStamp;

class ReceiverController extends AbstractController
{
    /**
     * @Route("/receiver", name="receiver")
     */

    public function index(MessageBusInterface $busInterface): Response
    {
        // sleep(5);
        // $busInterface->dispatch(new Receiver(), [
        //     new AmqpStamp('receiver_key', AMQP_NOPARAM),
        // ]);
        $busInterface->dispatch(new Receiver());
        $busInterface->dispatch(new Receiver());
        $busInterface->dispatch(new Receiver());

        return new Response("From Receiver Controller");
    }

}