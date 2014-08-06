<?php

namespace Altage\GastroCmd\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Altage\GastroCmd\Entity\Allergie
 * @ORM\Entity
 * @ORM\Table(name="Allergie")
 */
class Allergie {
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer", nullable=false)
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	/**
	 * @ORM\Column(type="string", length=100)
	 * @Assert\NotBlank()
	 */
	protected $nomAllergie;

	/**
	 * @ORM\Column(type="string", length=7)
	 * @Assert\NotBlank()
	 */
	protected $couleurAllergie;
  
  
	/**
	 * Get id
	 * @return integer
	 */
		public function getId()
	{
		return $this->id;
	}
  
  /**
	 *@inheritDoc
	 */
	public function getNomAllergie()
	{
		return $this->nomAllergie;
	}
	public function setNomAllergie($NomAllergie)
	{
        $this->nomAllergie = $NomAllergie;
	}
    /**
     * Set couleurAllergie
     *
     * @param string $couleurAllergie
     * @return Allergie
     */
    public function setCouleurAllergie($couleurAllergie)
    {
        $this->couleurAllergie = $couleurAllergie;

        return $this;
    }

    /**
     * Get couleurAllergie
     *
     * @return string 
     */
    public function getCouleurAllergie()
    {
        return $this->couleurAllergie;
    }
}
