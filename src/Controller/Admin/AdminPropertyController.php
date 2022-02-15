<?php


namespace App\Controller\Admin;


use App\Entity\Property;
use App\Form\Type\PropertyType;
use App\Repository\PropertyRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminPropertyController extends AbstractController
{   private $repositiry;
private $manager;
    public function __construct(PropertyRepository $repository, EntityManagerInterface $manager)
    {
        $this->repositiry = $repository;
        $this->manager = $manager;
    }

    /**
     * @Route("/admin", name="AdminPropGere")
     */

    public function index(){

        $propriety = $this->repositiry->findAll();
        return $this->render('pages/gererProp.html.twig',[
            'propriety'=>$propriety
        ]);

    }

    /**
     * @Route("/admin/{id}",name="AdminPropGereID")
     */

    public function editer(Request $request,int $id){

       $property = $this->repositiry->findOneBySomeField($id);

        $form = $this->createForm(PropertyType::class,$property);

        $form->handleRequest($request);


         if($form->isSubmitted() && $form->isValid()){
            $data = $form->getData();

            $property->setTitle($data['title'] ? $data['title']: $property->getTitle());
             $property->setDescription($data['description'] ? $data['description'] : $property->getDescription());
             $property->setSurface($data['surface'] ? $data['surface'] : $property->getSurface());
             $property->setRooms($data['rooms'] ? $data['rooms'] : $property->getRooms());
             $property->setBedrooms($data['bedroom'] ? $data['bedroom'] : $property->getBedrooms());
             $property->setFloor($data['floor'] ? $data['floor'] : $property->getFloor());
             $property->setPrice($data['price'] ? $data['price'] : $property->getPrice());
             $property->setCity($data['city'] ? $data['city'] : $property->getCity());
             $property->setAddress($data['address'] ? $data['address'] : $property->getAddress());
             $property->setPostalCode($data['postalCode'] ? $data['postalCode'] : $property->getPostalCode());
             $property->setSold($data['sold'] ? $data['sold'] : $property->getSold());
//             $property->setCreatedAt($data['createdat'] ? $data['createdat'] : $property->getCreatedAt());

            $em=$this->manager;

            $em->persist($property);
            $em->flush();

            $this->addFlash('success',"la proprieté a ete ajouté avec succes");

            //une redirection vers une autre page
           return  $this-> redirectToRoute('AdminPropGere');
         }

        return $this->render('pages/editer.html.twig',[
            'propertyForm'=>$form->createView()
        ]);
    }

    /**
     * @Route("/admin/DeleteElement/{id}", name="deleted")
     */
    public function delete(Request $request, int $id){
//        $property = $this->repositiry->findOneBySomeField($id);
//        $em = $this->manager;
//        $em->remove($property);
//        $em->flush();
//        return $this->render('pages/deleteProperty.html.twig');
        $property = $this->repositiry->findOneBySomeField($id);
        $em =$this->manager;

            $em->remove($property);
            $em->flush();

        $property = $this->repositiry->findAll();


        return $this->render('pages/gererProp.html.twig',[
            'propriety'=>$property
        ]);
    }


}