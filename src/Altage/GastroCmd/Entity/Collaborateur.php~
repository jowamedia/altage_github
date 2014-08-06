<?php

namespace Altage\GastroCmd\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
// use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="Collaborateur")
 */
class Collaborateur
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer", nullable=false)
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

// Association Mapping: http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/association-mapping.html
// Pour associer le champ siteId avec 
  
  /**
	 * @ORM\Column(type="integer")
	 * @Assert\NotBlank()
 	 */
  protected $siteId;
  
	/**
	 * @ORM\Column(type="string", length=255)
	 * @Assert\NotBlank()
	 * @Assert\Email()
	 */
	protected $email;
		
	/**
	 * @ORM\Column(type="string", length=40)
	 * @Assert\NotBlank()
	 */
	protected $lastName;
	
	/**
	 * @ORM\Column(type="string", length=40)
	 * @Assert\NotBlank()
	 */
	protected $firstName;

	/**
	 * @ORM\Column(type="date")
	 * @Assert\NotBlank()
	 */
	protected $entryDate;
	
	/**
	 * @ORM\Column(type="date", nullable=true)
	 */
	protected $leaveDate;
	
	/**
	 * @ORM\Column(name="is_active", type="boolean")
	 */
	private $isActive;

  
   public function __construct()
  {
    $this->entryDate    = new \DateTime;
    $this->isActive     = true;
  }
  
  
	/**
	 * Get id
	 * @return integer
	 */
		public function getId()
	{
		return $this->id;
	}

  /**
	 * Get idSite
	 * @return integer
	 */
	public function getSiteId()
	{
		return $this->siteId;
	}
	public function setSiteId($siteId)
	{
        $this->siteId = $siteId;
	}
  
  /**
	 * @inheritDoc
	 */
	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}
	
	/**
	 * @inheritDoc
	 */
	public function getLastName()
	{
		return $this->lastName;
	}	

	public function setLastName($lastName)
	{
		$this->lastName = $lastName;
	}
	
	/**
	 * @inheritDoc
	 */
	public function getFirstName()
	{
		return $this->firstName;
	}

	public function setFirstName($firstName)
	{
		$this->firstName = $firstName;
	}
	
	/**
	 * @inheritDoc
	 */
	public function getEntryDate()
	{
		return $this->entryDate;
	}

	public function setEntryDate($entryDate)
	{
		$this->entryDate = $entryDate;
	}
	
	/**
	 * @inheritDoc
	 */
	public function getLeaveDate()
	{
		return $this->leaveDate;
	}

	public function setLeaveDate($leaveDate)
	{
		$this->leaveDate = $leaveDate;
	}
	
	/**
	 * Set isActive
	 *
	 * @param boolean $isActive
	 * @return User
	 */
	public function setIsActive($isActive)
	{
		$this->isActive = $isActive;
	
		return $this;
	}
	
	/**
	 * Get isActive
	 *
	 * @return boolean
	 */
	public function getIsActive()
	{
		return $this->isActive;
	}
}
