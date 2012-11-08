<?php

namespace r4f\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="r4f\SiteBundle\Repository\SubscriptionRepository")
 * @ORM\Table(name="subscription")
 */
class Subscription
{
   /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;
	
	/**
	 * @ORM\ManyToOne(targetEntity="r4f\RunnerBundle\Entity\User", inversedBy="subscriptions")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="CASCADE")
	 */
	private $user;
	
	/**
	 * @ORM\ManyToOne(targetEntity="r4f\SiteBundle\Entity\Course", inversedBy="subscriptions")
     * @ORM\JoinColumn(name="course_id", referencedColumnName="id", onDelete="CASCADE")
	 */
	private $course;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set user
     *
     * @param r4f\RunnerBundle\Entity\User $user
     */
    public function setUser(\r4f\RunnerBundle\Entity\User $user)
    {
        $this->user = $user;
    }

    /**
     * Get user
     *
     * @return r4f\RunnerBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set course
     *
     * @param r4f\SiteBundle\Entity\Course $course
     */
    public function setCourse(\r4f\SiteBundle\Entity\Course $course)
    {
        $this->course = $course;
    }

    /**
     * Get course
     *
     * @return r4f\SiteBundle\Entity\Course 
     */
    public function getCourse()
    {
        return $this->course;
    }
}
