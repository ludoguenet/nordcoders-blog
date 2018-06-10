<?php

namespace AppBundle\Repository;

use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * PostRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PostRepository extends \Doctrine\ORM\EntityRepository
{
    public function getLast(int $page, int $nbrPerPage)
    {
        $query = $this->createQueryBuilder('p')
            ->orderBy('p.createdAt', 'DESC')
            ->where('p.isPublished = 1')
            ->getQuery()
            ->setFirstResult(($page - 1) * $nbrPerPage)
            ->setMaxResults($nbrPerPage);

        return new Paginator($query, true);
    }

    public function getSearch(string $q, int $page, int $nbrPerPage)
    {
        if (strlen($q) >= 3) {
            $query =  $this->createQueryBuilder('p')
                ->leftJoin('p.tags', 't')
                ->where('t.name LIKE :name OR p.content LIKE :name')
                ->andWhere('p.isPublished = 1')
                ->setParameter('name', '%' . $q . '%')
                ->orderBy('p.createdAt', 'DESC')
                ->getQuery()
                ->setFirstResult(($page - 1) * $nbrPerPage)
                ->setMaxResults($nbrPerPage);

            return new Paginator($query, true);
        }
        return array();
    }
}
