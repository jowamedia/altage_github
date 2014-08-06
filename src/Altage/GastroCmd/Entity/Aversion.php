<?php

namespace Altage\GastroCmd\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Altage\GastroCmd\Entity\Aversion
 * @ORM\Entity
 * @ORM\Table(name="Aversion")
 */
class Aversion {
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer", nullable=false)
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	/**
	 * @ORM\Column(type="string", length=40)
	 * @Assert\NotBlank()
	 */
	protected $nomAversion;

	/**
	 * @ORM\Column(type="string", length=7)
	 * @Assert\NotBlank()
	 */
	protected $couleurAversion;
  
  
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
	public function getNomAversion()
	{
		return $this->nomAversion;
	}
	public function setNomAversion($NomAversion)
	{
        $this->nomAversion = $NomAversion;
	}
    /**
     * Set couleurAversion
     *
     * @param string $couleurAversion
     * @return Aversion
     */
    public function setCouleurAversion($couleurAversion)
    {
        $this->couleurAversion = $couleurAversion;

        return $this;
    }

    /**
     * Get couleurAversion
     *
     * @return string 
     */
    public function getCouleurAversion()
    {
        return $this->couleurAversion;
    }
}
