<?php

namespace App\Command;

use App\Controller\propertyController;
use App\Entity\Property;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
class CreatePropertyCommand extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:create-property';
    protected static $defaultDescription = 'Creates a new property.';
    public $manager;

//
// public function __construct(String name = null)
//{
//    parent::__construct($manager);
//    $this->manager = $manager;
//
//}

    public function __construct(string $name = null,EntityManagerInterface $manager)
    {   $this->manager = $manager;
        parent::__construct($name,$manager);
    }

    protected function configure(): void
    {
        $this->setHelp('A l aide de cette commande vous pouvez créer très simplement une nouvelle instance de la classe property');
        $this->setDescription('cette méthode peut simplement créer une nouvelle instance de la classe property et de l ajouter à la base de données ')
            ->addArgument('property', InputArgument::OPTIONAL, 'This is a description.');
    }

    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln([
            'property Creator',
            '============',
            '',
        ]);



        // retrieve the argument value using getArgument()
        $output->writeln('property: '.$input->getArgument('property'));
        $property = new Property();
        $property->setTitle($input->getFirstArgument('property'))
        ->setRooms(3);

        $this->manager->persist($property);
        $this->manager->flush();

        $result = 1;
        return $result;
    }
}