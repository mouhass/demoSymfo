<?php


namespace App\Controller;


use App\Entity\Property;
use App\Entity\PropertySearch;
use App\Form\PropertySearchType;
use App\Form\Type\PropertyType;
use App\Repository\PropertyRepository;

use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

class propertyController extends AbstractController
{
   public  $manager;

    public function __construct(EntityManagerInterface $manager)
    {
        $this->manager = $manager;
    }

//    /**
//     * @Route("/biens/form" ,name="property.new",methods={"GET", "POST"})
//     */
//    public function new(Request $request){
//
//       // $property = new Property();
//
//
//        $form = $this->createForm(PropertyType::class);
//
//        $form->handleRequest($request);
//
//
//         if($form->isSubmitted() && $form->isValid()){
//            $data = $form->getData();
//            $property = new Property();
//            $property->setTitle($data['title']);
//               $property ->setSurface($data['surface']);
//               $property->setRooms($data['rooms']);
//            $em=$this->manager;
//
//            $em->persist($property);
//            $em->flush();
//
//            $this->addFlash('success',"la proprieté a ete ajouté avec succes");
//
//            //une redirection vers une autre page
//           return  $this-> redirectToRoute('Login');
//         }
//
//        return $this->render('myTemplates/prop.html.twig',[
//            'propertyForm'=>$form->createView()
//        ]);
//    }


    /**
     * @Route("/detailspropery/{slug}-{id}",methods={"GET"},name="property.show",requirements={"slug":"[a-z0-9\-]*"})
     */

    public function show(int $id,PropertyRepository $propertyRepository){

        $propriety = $propertyRepository->findOneBySomeField($id);
        return $this->render('pages/detailsProperty.html.twig',
        ['propriety'=>$propriety]
            );
    }





    /**
     * @Route("/biens",methods={"GET"}, name="property.index")
     *
     */

   public function index(PaginatorInterface $paginator, PropertyRepository $propertyRepository,Request $request){
       $search = new PropertySearch();
       $form = $this->createForm(PropertySearchType::class,$search);
       $form->handleRequest($request);



       $product =$paginator->paginate(
            $propertyRepository->findSpecific($search),//la methode à utilisr pour la pagination
            $request->query->getInt('page',1),
            12
        )
           ;

       return $this->render('property/index.html.twig',[
           'product'=>$product,
           'form'=>$form->createView()
       ]);

   }

       //5) Fetching des données




   //}
    /**
     * @Route("/createNewProperty",name="CreateNewProperty")
     */
    public function createNewProperty(Request $request, ValidatorInterface $validator){
        $property = new Property();

        $form = $this->createForm(PropertyType::class, $property);

        $form->handleRequest($request);


        if($form->isSubmitted() && $form->isValid()){
            $property = $form->getData();

//            $property->setTitle($data['title'] ? $data['title']: $property->getTitle());
//            $property->setDescription($data['description'] ? $data['description'] : $property->getDescription());
//            $property->setSurface($data['surface'] ? $data['surface'] : $property->getSurface());
//            $property->setRooms($data['rooms'] ? $data['rooms'] : $property->getRooms());
//            $property->setBedrooms($data['bedroom'] ? $data['bedroom'] : $property->getBedrooms());
//            $property->setFloor($data['floor'] ? $data['floor'] : $property->getFloor());
//            $property->setPrice($data['price'] ? $data['price'] : $property->getPrice());
//            $property->setCity($data['city'] ? $data['city'] : $property->getCity());
//            $property->setAddress($data['address'] ? $data['address'] : $property->getAddress());
//            $property->setPostalCode($data['postalCode'] ? $data['postalCode'] : $property->getPostalCode());
//            $property->setSold($data['sold'] ? $data['sold'] : $property->getSold());
//             $property->setCreatedAt($data['createdat'] ? $data['createdat'] : $property->getCreatedAt());

            $em=$this->manager;
            //$property->setCreatedBy($this->getUser());
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


}