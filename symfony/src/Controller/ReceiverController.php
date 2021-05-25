<?php


namespace App\Controller;


use App\Controller\Sender\Receiver;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

class ReceiverController extends AbstractController
{
    /**
     * @Route("/receiverController", name="receiverController")
     */
    public function index(MessageBusInterface $busInterface): Response
    {
        sleep(3);
        $busInterface->dispatch(new Receiver());
        $busInterface->dispatch(new Receiver());
        $busInterface->dispatch(new Receiver());

        return new Response("From Receiver Controller");
    }

}