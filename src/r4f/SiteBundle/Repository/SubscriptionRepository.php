<?php

namespace r4f\SiteBundle\Repository;

use Doctrine\ORM\EntityRepository;
use r4f\SiteBundle\Entity\Subscription;

class SubscriptionRepository extends EntityRepository
{
    /**
     * Create a course subscrition
     *
     * @param User $user
     * @param Course $course
     * @return Subscription
     */
    public function subscribe($user, $course)
    {
        $subscription = new Subscription();
        $subscription->setUser($user);
        $subscription->setCourse($course);
        $em = $this->getEntityManager();
        $em->persist($subscription)->$em->flush();
        
        return $subscription;
    }

    /**
     * Remove a course subscription 
     *
     * @param User $user
     * @param Course $course
     * @return boolean
     */    
	public function unSubscribe($user, $course)
	{
        try {
            $em = $this->getEntityManager();
            $subscription = $em->getRepository('r4fSiteBundle:Subscription')
                ->findOneBy(array(
                    'user' => $user->getId(),
                    'course' => $course->getId()
                ))
            ;
            $em->remove($subscription);
            $em->flush();

            return true;
        } catch(Exception $e){
            return false;
        }
	}
}