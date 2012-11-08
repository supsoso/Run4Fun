<?php

namespace r4f\SiteBundle\Repository;

use Doctrine\ORM\EntityRepository;

class MapRepository extends EntityRepository
{
    public function getStartPointQueryBuilder($id)
    {
        $qb = $this->getEntityManager()->createQueryBuilder();
        $qb->select('a')
          ->from('r4fSiteBundle:Address', 'a')
          ->innerJoin('a.r4fSiteBundle:Map', 'map', 'WITH', 'map.course = :course_id')
          ->setParameter('course_id', $id)
          ->where('r4fSiteBundle:Map.priority = ?0')
       ;

       return $qb;
    }

    public function getStartPointQuery($course_id)
    {
        $qb = $this->getStartPointQueryBuilder($course_id);

        return is_null($qb) ? $qb : $qb->getQuery();
    }

    public function getStartPoint($course_id)
    {
        $q = $this->getStartPointQuery($course_id);

        return is_null($q) ? array() : $q->getResult();
    }
	
	    public function AddressStart($id)
    {
        $query = $this->_em->createQuery('SELECT a FROM r4fSiteBundle:Address a, r4fSiteBundle:Map m WHERE a.id = m.address AND m.priority = 0 and m.course = :course_id')
		->setParameter('course_id', $id)
		;	
        $resultats = $query->getResult();

        return $resultats;
    }
	
	    public function AddressEnd($id)
    {
        $query = $this->_em->createQuery('SELECT a FROM r4fSiteBundle:Address a, r4fSiteBundle:Map m WHERE a.id = m.address AND m.priority = 1 and m.course = :course_id')
		->setParameter('course_id', $id)
		;
        $resultats = $query->getResult();

        return $resultats;
    }	
}
