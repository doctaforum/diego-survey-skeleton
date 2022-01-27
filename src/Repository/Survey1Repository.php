<?php

namespace App\Repository;

use App\Entity\Survey1;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Survey1|null find($id, $lockMode = null, $lockVersion = null)
 * @method Survey1|null findOneBy(array $criteria, array $orderBy = null)
 * @method Survey1[]    findAll()
 * @method Survey1[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Survey1Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Survey1::class);
    }

    // /**
    //  * @return Survey1[] Returns an array of Survey1 objects
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
    public function findOneBySomeField($value): ?Survey1
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
