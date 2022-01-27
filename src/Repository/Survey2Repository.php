<?php

namespace App\Repository;

use App\Entity\Survey2;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Survey2|null find($id, $lockMode = null, $lockVersion = null)
 * @method Survey2|null findOneBy(array $criteria, array $orderBy = null)
 * @method Survey2[]    findAll()
 * @method Survey2[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Survey2Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Survey2::class);
    }

    // /**
    //  * @return Survey2[] Returns an array of Survey2 objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Survey2
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
