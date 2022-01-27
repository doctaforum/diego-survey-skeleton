<?php

namespace App\Repository;

use App\Entity\Generalsurvey;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Generalsurvey|null find($id, $lockMode = null, $lockVersion = null)
 * @method Generalsurvey|null findOneBy(array $criteria, array $orderBy = null)
 * @method Generalsurvey[]    findAll()
 * @method Generalsurvey[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GeneralsurveyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Generalsurvey::class);
    }

    // /**
    //  * @return Generalsurvey[] Returns an array of Generalsurvey objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Generalsurvey
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
