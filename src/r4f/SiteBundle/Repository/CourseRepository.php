<?php

namespace r4f\SiteBundle\Repository;

use Doctrine\ORM\EntityRepository;

class CourseRepository extends EntityRepository
{
	public function CoursesAll()
	{
		$query = $this->_em->createQuery('SELECT a FROM r4fSiteBundle:Course a ORDER BY a.id DESC');
		$resultats = $query->getResult();

		return $resultats;
	}
	
	public function getUsersQueryBuilder($course_id)
	{
		$qb = $this->getEntityManager()->createQueryBuilder();
        $qb->select('u')
          ->from('r4fRunnerBundle:User', 'u')
          ->innerJoin('u.subscriptions', 'sub', 'WITH', 'sub.course = :course_id')
          ->setParameter('course_id', $course_id)
       ;

       return $qb;
	}
	
	public function getUsersQuery($course_id)
	{
		$qb = $this->getUsersQueryBuilder($course_id);

		return is_null($qb) ? $qb : $qb->getQuery();
	}
	
	public function getUsers($course_id)
	{
		$q = $this->getUsersQuery($course_id);
		
		return is_null($q) ? array() : $q->getResult();	
	}
}