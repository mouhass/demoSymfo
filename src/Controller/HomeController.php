<?php


namespace App\Controller;
use App\Repository\PropertyRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    private $manager;
    private $repository;
   public function __construct(EntityManagerInterface $manager, PropertyRepository $repository)
   {
       $this->manager= $manager;
       $this->repository = $repository;
   }

    public function index(){
        $propriety = $this->repository->findAll();


        return $this->render('pages/home.html.twig',
        ['propriety'=>$propriety]
            );
    }
}