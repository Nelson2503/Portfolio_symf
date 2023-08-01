<?php

namespace App\Repository;

use App\Entity\CompetenceTech;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CompetenceTech>
 *
 * @method CompetenceTech|null find($id, $lockMode = null, $lockVersion = null)
 * @method CompetenceTech|null findOneBy(array $criteria, array $orderBy = null)
 * @method CompetenceTech[]    findAll()
 * @method CompetenceTech[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompetenceTechRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CompetenceTech::class);
    }

//    /**
//     * @return CompetenceTech[] Returns an array of CompetenceTech objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CompetenceTech
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
