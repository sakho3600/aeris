<?php

namespace App\Repository;

use App\Entity\MesureDioxine;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method MesureDioxine|null find($id, $lockMode = null, $lockVersion = null)
 * @method MesureDioxine|null findOneBy(array $criteria, array $orderBy = null)
 * @method MesureDioxine[]    findAll()
 * @method MesureDioxine[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MesureDioxineRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, MesureDioxine::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('m')
            ->where('m.something = :value')->setParameter('value', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
