<?php

namespace App\Service;




use cebe\markdown\Markdown;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Message extends AbstractController
{


  # private $logger;
    public function __construct(String $contentsDir)
    {



    }

    public function getHappyMessage()
    {  $contentsDir = $this->getParameter('app.contents_dir');

        $messages = [

            'You did it! You updated the system! Amazing!',
            'That was one of the coolest updates I\'ve seen all day!',
            'Great work! Keep going!',
        ];

        //$index = array_rand($messages);
          echo $contentsDir;
        return $messages ;
    }



}