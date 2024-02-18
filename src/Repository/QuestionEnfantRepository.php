<?php

namespace App\Repository;

use App\Entity\QuestionEnfant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<QuestionEnfant>
 *
 * @method QuestionEnfant|null find($id, $lockMode = null, $lockVersion = null)
 * @method QuestionEnfant|null findOneBy(array $criteria, array $orderBy = null)
 * @method QuestionEnfant[]    findAll()
 * @method QuestionEnfant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuestionEnfantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, QuestionEnfant::class);
    }

//    /**
//     * @return QuestionEnfant[] Returns an array of QuestionEnfant objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('q')
//            ->andWhere('q.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('q.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?QuestionEnfant
//    {
//        return $this->createQueryBuilder('q')
//            ->andWhere('q.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
