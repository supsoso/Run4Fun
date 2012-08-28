<?php

namespace r4f\SiteBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use r4f\SiteBundle\Entity\Address;

/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="r4f\SiteBundle\Repository\CourseRepository")
 */
class Course
{
   /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;

    /**
     * @ORM\Column(type="text")
     */
    private $description;
	
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\MaxLength(limit=2, message="Faites attention svp, un runner humain ne peut pas courrir plus de 100km !")
     */
    private $length;
	
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $meeting_point;	
	
	/**
	 * @ORM\OneToMany(targetEntity="r4f\SiteBundle\Entity\Message", mappedBy="course", cascade={"remove", "persist"})
	 */
	private $messages;
	
	/**
	 * @ORM\OneToMany(targetEntity="r4f\SiteBundle\Entity\Subscription", mappedBy="course", cascade={"remove", "persist"})
	 */
	private $subscriptions;
	
	/**
     * @ORM\OneToMany(targetEntity="r4f\SiteBundle\Entity\Map", mappedBy="course", cascade={"remove", "persist"})
     */
	private $map;
	
    public function __construct()
    {
        $this->messages = new \Doctrine\Common\Collections\ArrayCollection();
		$this->subscriptions = new \Doctrine\Common\Collections\ArrayCollection();
		$this->map = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * Set description
     *
     * @param text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return text 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set length
     *
     * @param string $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     * Get length
     *
     * @return string 
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Add messages
     *
     * @param r4f\SiteBundle\Entity\Message $messages
     */
    public function addMessage(\r4f\SiteBundle\Entity\Message $messages)
    {
        $this->messages[] = $messages;
    }

    /**
     * Get messages
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Add subscriptions
     *
     * @param r4f\SiteBundle\Entity\Subscription $subscriptions
     */
    public function addSubscription(\r4f\SiteBundle\Entity\Subscription $subscriptions)
    {
        $this->subscriptions[] = $subscriptions;
    }

    /**
     * Get subscriptions
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getSubscriptions()
    {
        return $this->subscriptions;
    }

    /**
     * Add map
     *
     * @param r4f\SiteBundle\Entity\Map $map
     */
    public function addMap(\r4f\SiteBundle\Entity\Map $map)
    {
        $this->map[] = $map;
    }

    /**
     * Get map
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * Set meeting_point
     *
     * @param string $meetingPoint
     */
    public function setMeetingPoint($meetingPoint)
    {
        $this->meeting_point = $meetingPoint;
    }

    /**
     * Get meeting_point
     *
     * @return string 
     */
    public function getMeetingPoint()
    {
        return $this->meeting_point;
    }
}