<?php

namespace App\Controller;

use App\Controller\EmailMessage\EmailMessage;
use App\Controller\WhatsappMessage\WhatsappMessage;
use App\Controller\SMSMessage\SMSMessage;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Messenger\MessageBusInterface;


class DefaultController extends AbstractController
{

    /**
     * @Route("/default", name="default")
     */

    public function index(MessageBusInterface $busInterface): Response
    {
         $busInterface->dispatch(new SMSMessage('Look! I created a SMS message!'));

         $busInterface->dispatch(new WhatsappMessage(1,'Look! I created a WhatApp message!'));

         $busInterface->dispatch(new EmailMessage('Look! I created a Email message!'));

         return new Response("From default Controller");
    }


}