<?php

namespace r4f\RunnerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="r4f\RunnerBundle\Entity\LevelRepository")
 */
class Level
{
   /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;
	
	public function __toString()
	{
		return $this->name;
 	}
	
	/**
	 * @ORM\OneToMany(targetEntity="r4f\RunnerBundle\Entity\User", mappedBy="level")
	 */
    private $user;

    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add user
     *
     * @param r4f\RunnerBundle\Entity\User $user
     */
    public function addUser(\r4f\RunnerBundle\Entity\User $user)
    {
        $this->user[] = $user;
    }

    /**
     * Get user
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getUser()
    {
        return $this->user;
    }
}