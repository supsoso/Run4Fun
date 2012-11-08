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

    public function countCourses()
    {
        $query = $this->_em->createQuery('SELECT COUNT(c) FROM r4fSiteBundle:Course c');

        return $resultats = $query->getSingleScalarResult();
    }

    public function MyCoursesQueryBuilder($id)
    {
        $qb = $this->getEntityManager()->createQueryBuilder();
        $qb->select('c')
          ->from('r4fSiteBundle:Course', 'c')
          ->innerJoin('c.subscriptions', 'sub', 'WITH', 'sub.user = :user_id')
          ->setParameter('user_id', $id)
       ;

       return $qb;
    }

    public function MyCoursesQuery($id)
    {
        $qb = $this->MyCoursesQueryBuilder($id);

        return is_null($qb) ? $qb : $qb->getQuery();
    }

    public function MyCourses($id)
    {
        $q = $this->MyCoursesQuery($id);

        return is_null($q) ? array() : $q->getResult();	
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
