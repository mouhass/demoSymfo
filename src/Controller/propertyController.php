<?php


namespace App\Controller;


use App\Entity\Property;
use App\Form\Type\PropertyType;
use App\Repository\PropertyRepository;

use Doctrine\ORM\EntityManagerInterface;
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

   public function index(ManagerRegistry $doctrine,ValidatorInterface $validator, PropertyRepository $propertyRepository){
//       !!!!!! faire le fetching des données à partir du fichier de l'entité
//       $id=1;
//       $product = $doctrine->getRepository(Property::class)->find($id);
//       if (!$product) {
//           throw $this->createNotFoundException(
//               'No product found for id '.$id
//           );
//       }
//       else  {
//          echo $product->getTitle();
//       }


       //!!!!!) faire le fetching des données à partir du fichier de repository
      // !!!!!!!!!!!!!!!!!!!!!!!!
//       $id=1;
//       $product = $propertyRepository->find($id);
//       echo $product->getTitle().'<br>';
//       //!!!!!!!!!!!!!!!!!!!!!!!!!!!
//       $product = $propertyRepository->findOneBySomeField($id);
//       echo $product->getCity().'<br>';
//       //!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//       $product = $propertyRepository->findBy(['title'=>"first property"]);
//       foreach ($product as $p ){
//           echo $p->getId();
//       }
//
//       echo '<br>'.$id;

       //!!!!!!!!!!!!!!!Updating data in database
       //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//       $entityManager = $doctrine->getManager();
//       $product = $propertyRepository->findOneBy(['title'=>'second property']);
//       if(!$product){
//           echo "i didn't find what you are searching for";
//       }
//       else {
//           $product->setTitle("was second property");
//           $entityManager->persist($product);
//           $entityManager->flush();
//       }
      // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
       //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

       //!!!!!!!!!!!!!!!!! remove elements from the database
       $entityManager = $doctrine->getManager();
       $product = $propertyRepository->findOneBy(['id'=>1]);
       if(!$product){
           echo "I didn't find what you are looking for";

       }
       else {
           $entityManager->remove($product);
           $entityManager->flush();
       }
       //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
       //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

//       $product = $propertyRepository->findAllGreaterPrice(200);
//      print_r($product);
//      echo "<br>".count($product);


      //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
       //en utilisant une requete complexe à l'aide de sql
       $product = $propertyRepository->findBetweenPrices(200,500000);
//       if(!$product){echo "it is empty";}
//       else{
//           echo "<br>"."----------------------"."<br>";
//           print_r($product);
//
//           echo "<br>".count($product);
//       }


       //1) Instanciation
       // $property = new Property();
////       //personnaliser l'insatnce
//       $property->setTitle("first property")
//           ->setSurface(2000)
//           ->setPrice(300000)
//           ->setRooms(300)
//           ->setBedrooms(2)
//           ->setFloor(5)
//           ->setHeat(1)
//           ->setCity("mahdia")
//           ->setAddress("Av hbib bourguiba mahdia")
//           ->setPostalCode("5111");
//      //3) validation
//       $errors = $validator->validate($property);
//       if (count($errors) > 0) {
//           return new Response((string) $errors, 400);
//       }
//       else {
          // 4) ajout de données dans la base de données
//           $entityManager = $doctrine->getManager();
//           $entityManager->persist($property);
//           $entityManager->flush();

          // $product ="hello world";

           return $this->render('property/index.html.twig',[
               'current_menu'=> 'properties',
               'product'=>$product,

           ]);
       }

       //5) Fetching des données




   //}
    /**
     * @Route("/createNewProperty",name="CreateNewProperty")
     */
    public function createNewProperty(Request $request){
        $property = new Property();

        $form = $this->createForm(PropertyType::class);

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


}