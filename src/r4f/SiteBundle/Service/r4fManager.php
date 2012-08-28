<?php

namespace r4f\SiteBundle\Service;

use r4f\SiteBundle\Entity\Subscription;
use r4f\SiteBundle\Entity\Course;
use Doctrine\ORM\EntityManager;


class r4fManager
{
    protected $em;

    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }
    
    public function getEntityManager()
    {
        return $this->em;
    }
    
    public function getName()
    {
        return 'r4fManager';
    }
   	
    public function isCourseSubscriber($user, $course)
    {  
        $subscription = $this->getEntityManager()
            ->getRepository('r4fSiteBundle:Subscription')
            ->findOneBy(array(
                'user' => $user->getId(),
                'course' => $course->getId()
            ))
        ;

        return !is_null($subscription);
    }
}


