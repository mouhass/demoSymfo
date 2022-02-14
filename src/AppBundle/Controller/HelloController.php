<?php


namespace App\AppBundle\Controller;


use Symfony\Component\HttpFoundation\Response;

class HelloController
{
    public function indexAction($name)
    {
        return new Response('');
    }
}