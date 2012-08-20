<?php

namespace r4f\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="r4f\UserBundle\Repository\UserRepository")
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
   /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;
	
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $phone_number;
	
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $aim;
	
	/**
     * @ORM\Column(type="date", nullable=true)
     */
    private $birthdate;
	
	/**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $sexe;
	
	/**
	 * @ORM\ManyToOne(targetEntity="r4f\UserBundle\Entity\Level", inversedBy="users")
	 */
	private $level;
	
	/**
	 * @ORM\OneToMany(targetEntity="r4f\CourseBundle\Entity\Message", mappedBy="user", cascade={"remove", "persist"})
	 */
	private $messages;
	
	/**
	 * @ORM\OneToMany(targetEntity="r4f\CourseBundle\Entity\Subscription", mappedBy="user", cascade={"remove", "persist"})
	 */
	private $subscriptions;
	
	/**
	 * @ORM\ManyToOne(targetEntity="r4f\CourseBundle\Entity\Address", inversedBy="users")
	 */
	private $address;
	
    public function __construct()
    {
		parent::__construct();
        $this->messages = new \Doctrine\Common\Collections\ArrayCollection();
		$this->subscriptions = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone_number
     *
     * @param string $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phone_number = $phoneNumber;
    }

    /**
     * Get phone_number
     *
     * @return string 
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * Set aim
     *
     * @param string $aim
     */
    public function setAim($aim)
    {
        $this->aim = $aim;
    }

    /**
     * Get aim
     *
     * @return string 
     */
    public function getAim()
    {
        return $this->aim;
    }

    /**
     * Set level
     *
     * @param r4f\UserBundle\Entity\Level $level
     */
    public function setLevel(\r4f\UserBundle\Entity\Level $level)
    {
        $this->level = $level;
    }

    /**
     * Get level
     *
     * @return r4f\UserBundle\Entity\Level 
     */
    public function getLevel()
    {
        return $this->level;
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
     * Set address
     *
     * @param r4f\CourseBundle\Entity\Address $address
     */
    public function setAddress(\r4f\CourseBundle\Entity\Address $address)
    {
        $this->address = $address;
    }

    /**
     * Get address
     *
     * @return r4f\CourseBundle\Entity\Address 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set birthdate
     *
     * @param date $birthdate
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
    }

    /**
     * Get birthdate
     *
     * @return date 
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->sexe;
    }
}