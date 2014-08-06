<?php

namespace Altage\GastroCmd\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
// use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="CommandesDetail")
 */
class CommandesDetail
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer", nullable=false)
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
  
   /**
   * @ORM\ManyToMany(targetEntity="Altage\GastroCmd\Entity\CommandesHeader", mappedBy="id", cascade={"persist"})
   */
  private $orderId;
  
   /**
   * @ORM\ManyToMany(targetEntity="Altage\GastroCmd\Entity\Client", mappedBy="id", cascade={"persist"})
   */
	protected $clientId;
		
   /**
   * @ORM\ManyToMany(targetEntity="Altage\GastroCmd\Entity\Collaborateur", mappedBy="id", cascade={"persist"})
   */
	protected $collaborateurId;
 
}
