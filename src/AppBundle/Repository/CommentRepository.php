<?php

namespace AppBundle\Repository;

/**
 * CommentRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CommentRepository extends \Doctrine\ORM\EntityRepository
{
    public function getCommentsByOrder(int $id)
    {
        return $this->createQueryBuilder('c')
            ->leftJoin('c.post', 'p')
            ->where('p.id = :id')
            ->setParameter(':id', $id)
            ->orderBy('c.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function isSpam($seconds)
    {
        $date = new \DateTime('now');
        $date->modify('-' . $seconds . ' seconds');

        return $this->createQueryBuilder('c')
            ->where('c.createdAt > :date')
            ->setParameter('date', $date)
            ->setMaxResults(1)
            ->getQuery()
            ->getResult();
    }
}
