<?php

namespace r4f\CourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="r4f\UserBundle\Entity\MapRepository")
 */
class Map
{
   /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $priority;
	
	/**
     * @ORM\ManyToOne(targetEntity="r4f\CourseBundle\Entity\Course", inversedBy="maps")
     */
	private $course;
	
	/**
	 * @ORM\ManyToOne(targetEntity="r4f\CourseBundle\Entity\Address", inversedBy="maps")
	 */
	private $address;

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
     * Set priority
     *
     * @param integer $priority
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
    }

    /**
     * Get priority
     *
     * @return integer 
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set course
     *
     * @param r4f\CourseBundle\Entity\Course $course
     */
    public function setCourse(\r4f\CourseBundle\Entity\Course $course)
    {
        $this->course = $course;
    }

    /**
     * Get course
     *
     * @return r4f\CourseBundle\Entity\Course 
     */
    public function getCourse()
    {
        return $this->course;
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
}