<?php

namespace r4f\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="r4f\SiteBundle\Repository\MessageRepository")
 * @ORM\Table(name="message")
 */
class Message
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
    private $text;
	
	/**
	 * @ORM\ManyToOne(targetEntity="r4f\RunnerBundle\Entity\User", inversedBy="messages")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="CASCADE")
	 */
	private $user;
	
	/**
	 * @ORM\ManyToOne(targetEntity="r4f\SiteBundle\Entity\Course", inversedBy="messages")
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
     * Set text
     *
     * @param text $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * Get text
     *
     * @return text 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set user
     *
     * @param r4f\RunnerBundle\Entity\User $user
     */
    public function setUser(\r4f\UserBundle\Entity\User $user)
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
