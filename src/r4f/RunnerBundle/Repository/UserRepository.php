<?php

namespace r4f\RunnerBundle\Repository;

use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{
    public function countUsers()
    {
        $query = $this->_em->createQuery('SELECT COUNT(u) FROM r4fRunnerBundle:user u');

        return $query->getSingleScalarResult();
    }
}
