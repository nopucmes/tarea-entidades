<?php
namespace App\Repository;
use App\Entity\Computer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
/**
* @extends ServiceEntityRepository<Computer>
*
* @method Computer|null find($id, $lockMode = null, $lockVersion = null)
* @method Computer|null findOneBy(array $criteria, array $orderBy = null)
* @method Computer[] findAll()
* @method Computer[] findBy(array $criteria, array $orderBy = null, $limit= null, $offset = null)
*/
class ComputerRepository extends ServiceEntityRepository
{
public function __construct(ManagerRegistry $registry)
{
parent::__construct($registry, Computer::class);
}
public function save(Computer $entity, bool $flush = false): void
{
$this->getEntityManager()->persist($entity);
if ($flush) {
$this->getEntityManager()->flush();
}
}
public function remove(Computer $entity, bool $flush = false): void
{
$this->getEntityManager()->remove($entity);
if ($flush) {
$this->getEntityManager()->flush();
}
}
}