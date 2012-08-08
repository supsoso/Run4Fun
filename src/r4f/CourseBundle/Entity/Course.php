<?php

namespace r4f\CourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="r4f\UserBundle\Entity\CourseRepository")
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
     */
    private $length;
	
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $meeting_point;	
	
	/**
	 * @ORM\OneToMany(targetEntity="r4f\CourseBundle\Entity\Message", mappedBy="course", cascade={"remove", "persist"})
	 */
	private $messages;
	
	/**
	 * @ORM\OneToMany(targetEntity="r4f\CourseBundle\Entity\Subscription", mappedBy="course", cascade={"remove", "persist"})
	 */
	private $subscriptions;
	
	/**
     * @ORM\OneToMany(targetEntity="r4f\CourseBundle\Entity\Map", mappedBy="course", cascade={"remove", "persist"})
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
     * @param r4f\CourseBundle\Entity\Message $messages
     */
    public function addMessage(\r4f\CourseBundle\Entity\Message $messages)
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
     * @param r4f\CourseBundle\Entity\Subscription $subscriptions
     */
    public function addSubscription(\r4f\CourseBundle\Entity\Subscription $subscriptions)
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
     * @param r4f\CourseBundle\Entity\Map $map
     */
    public function addMap(\r4f\CourseBundle\Entity\Map $map)
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
}