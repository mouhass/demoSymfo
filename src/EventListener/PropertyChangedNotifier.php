<?php


namespace App\EventListener;
use App\Entity\Property;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\Event\LifecycleEventArgs;

class PropertyChangedNotifier
{  private $em;

    public function __construct(EntityManagerInterface $em)
    {$this->em= $em;
    }

    public function preUpdate(Property $property, LifecycleEventArgs $event) {

        //le traitement écrit ici fonctionne bien

        return "hello world";
    }



}