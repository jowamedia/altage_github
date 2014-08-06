<?php

namespace Altage\GastroCmd\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Altage\GastroCmd\Entity\Regime
 * @ORM\Entity
 * @ORM\Table(name="Regime")
 */
class Regime {
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
	protected $nomRegime;

	/**
	 * @ORM\Column(type="string", length=7)
	 * @Assert\NotBlank()
	 */
	protected $couleurRegime;
  
  
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
	public function getNomRegime()
	{
		return $this->nomRegime;
	}
	public function setNomRegime($NomRegime)
	{
        $this->nomRegime = $NomRegime;
	}
    /**
     * Set couleurRegime
     *
     * @param string $couleurRegime
     * @return Regime
     */
    public function setCouleurRegime($couleurRegime)
    {
        $this->couleurRegime = $couleurRegime;

        return $this;
    }

    /**
     * Get couleurRegime
     *
     * @return string 
     */
    public function getCouleurRegime()
    {
        return $this->couleurRegime;
    }
}
