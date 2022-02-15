<?php


namespace App\EventListener;
use App\Entity\Property;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\Event\LifecycleEventArgs;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PropertyChangedNotifier extends AbstractController
{  private $em;

    public function __construct(EntityManagerInterface $em)
    {$this->em= $em;

    }

    public function prePersist(Property $property, LifecycleEventArgs $event) {
        $user = $this->getUser();


        $property->setCreatedBy($user);
      // dd($property);

        return "hello world";
    }



}