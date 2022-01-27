<?php

namespace App\Repository;

use App\Entity\Survey3;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Survey3|null find($id, $lockMode = null, $lockVersion = null)
 * @method Survey3|null findOneBy(array $criteria, array $orderBy = null)
 * @method Survey3[]    findAll()
 * @method Survey3[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Survey3Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Survey3::class);
    }

    // /**
    //  * @return Survey3[] Returns an array of Survey3 objects
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
    public function findOneBySomeField($value): ?Survey3
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
