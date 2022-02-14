<?php

namespace App\Repository;

use App\Entity\Property;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Property|null find($id, $lockMode = null, $lockVersion = null)
 * @method Property|null findOneBy(array $criteria, array $orderBy = null)
 * @method Property[]    findAll()
 * @method Property[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PropertyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Property::class);
    }

    // /**
    //  * @return Property[] Returns an array of Property objects
    //  */

    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.id = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }



    public function findOneBySomeField($value): ?Property
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.id = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    //ajouter des requetes plus complexes
    //1) on commence par uiliser les requetes sql
    public function findAllGreaterThanPrice($price){
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            "select p 
            from App\Entity\Property p
             where p.price > :price
              order by  p.price asc
              ")->setParameter('price',$price);
        return $query->getResult();
    }

    public function findBetweenPrices(int $price1,int $price2){
        $conn=$this->getEntityManager()->getConnection();
        $sql = "
           select * from property p
           where p.price > :price1 and p.price < :price2
           order by p.price asc
           ";
        $prep = $conn->prepare($sql);
        $resultSet = $prep->executeQuery(['price1'=>$price1,'price2'=>$price2]);
        return $resultSet->fetchAllAssociative();
    }

    //2) maintenant en utilisant les dql
    public function findAllGreaterPrice($price){
        $qb = $this->createQueryBuilder('p')
            ->andWhere('p.available=TRUE')
            ->where('p.price>:price')
            ->setParameter('price',$price)
            ->orderBy('p.price','ASC');
        $sql = $qb->getQuery();
        return $sql->execute();

    }





}
