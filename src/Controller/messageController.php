<?php

namespace App\Controller;
use App\Service\Message;
use App\Service\SiteUpdateManager;
use cebe\markdown\Markdown;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class messageController extends Controller
{
    /**
     * @Route("/message", name="message")
     *
     */


    public function new(Message $mg,Markdown $parser )
    {

        $message = $mg->getHappyMessage();
        $this->addFlash('success', $message);
        return $this->render('myTemplates/useservice.html.twig',
            ["messageController"=>$message[0],
                'content'=>$parser->parse("read the markdown service")
                ]);
    }
}