<?php

namespace Altage\GastroCmd\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
// use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="CommandesHeader")
 */
class CommandesHeader
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer", nullable=false)
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
  
   /**
   * @ORM\ManyToMany(targetEntity="Altage\UserBundle\Entity\User", mappedBy="id", cascade={"persist"})
   */
  private $siteId;
  
	/**
	 * @ORM\Column(type="date")
	 * @Assert\NotBlank()
	 */
	protected $createDate;
		
	/**
	 * @ORM\Column(type="date")
	 * @Assert\NotBlank()
	 */
	protected $orderValuleDate;	
  
	/**
	 * @ORM\Column(type="boolean")
	 * @Assert\NotBlank()
	 */
	protected $am_pm;

	/**
	 * @ORM\Column(type="smallint", nullable=true)
	 */
	protected $speciality;
	
	/**
	 * @ORM\Column(type="smallint", nullable=true)
	 */
	protected $visitorsQty;
	

}
