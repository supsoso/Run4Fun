<?php

namespace r4f\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 */
class Address
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
    private $address;
	
	public function __toString()
	{
		return $this->address;
 	}
	
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $zip_code;
	
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city;
	
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $country;
	
    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $latitude;
	
    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $longitude;
	
    /**
	 * @ORM\OneToMany(targetEntity="r4f\SiteBundle\Entity\Map", mappedBy="Address", cascade={"remove", "persist"})
	 */
	private $map;

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
     * Set address
     *
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set zip_code
     *
     * @param string $zipCode
     */
    public function setZipCode($zipCode)
    {
        $this->zip_code = $zipCode;
    }

    /**
     * Get zip_code
     *
     * @return string 
     */
    public function getZipCode()
    {
        return $this->zip_code;
    }

    /**
     * Set city
     *
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * Get latitude
     *
     * @return float 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * Get longitude
     *
     * @return float 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }
}