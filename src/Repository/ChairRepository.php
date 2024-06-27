<?php
namespace App\Repository;
use App\Entity\Chair;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
/**
* @extends ServiceEntityRepository<Chair>
*
* @method Chair|null find($id, $lockMode = null, $lockVersion = null)
* @method Chair|null findOneBy(array $criteria, array $orderBy = null)
* @method Chair[] findAll()
* @method Chair[] findBy(array $criteria, array $orderBy = null, $limit= null, $offset = null)
*/
class ChairRepository extends ServiceEntityRepository
{
public function __construct(ManagerRegistry $registry)
{
parent::__construct($registry, Chair::class);
}
public function save(Chair $entity, bool $flush = false): void
{
$this->getEntityManager()->persist($entity);
if ($flush) {
$this->getEntityManager()->flush();
}
}
public function remove(Chair $entity, bool $flush = false): void
{
$this->getEntityManager()->remove($entity);
if ($flush) {
$this->getEntityManager()->flush();
}
}
}