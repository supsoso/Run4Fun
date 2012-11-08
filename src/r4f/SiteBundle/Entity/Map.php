<?php

namespace r4f\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="r4f\SiteBundle\Repository\MapRepository")
 * @ORM\Table(name="map")
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
     * @ORM\ManyToOne(targetEntity="r4f\SiteBundle\Entity\Course", inversedBy="maps")
     * @ORM\JoinColumn(name="course_id", referencedColumnName="id", onDelete="CASCADE")
     */
	private $course;
	
	/**
	 * @ORM\ManyToOne(targetEntity="r4f\SiteBundle\Entity\Address", inversedBy="maps")
     * @ORM\JoinColumn(name="address_id", referencedColumnName="id", onDelete="CASCADE")
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

    /**
     * Set address
     *
     * @param r4f\SiteBundle\Entity\Address $address
     */
    public function setAddress(\r4f\SiteBundle\Entity\Address $address)
    {
        $this->address = $address;
    }

    /**
     * Get address
     *
     * @return r4f\SiteBundle\Entity\Address 
     */
    public function getAddress()
    {
        return $this->address;
    }
}
