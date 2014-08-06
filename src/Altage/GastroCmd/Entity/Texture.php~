<?php

namespace Altage\GastroCmd\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Altage\GastroCmd\Entity\Texture
 * @ORM\Entity
 * @ORM\Table(name="Texture")
 */
class Texture {
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
	protected $nomTexture;

	/**
	 * @ORM\Column(type="string", length=7)
	 * @Assert\NotBlank()
	 */
	protected $couleurTexture;
  
  
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
	public function getNomTexture()
	{
		return $this->nomTexture;
	}
	public function setNomTexture($NomTexture)
	{
        $this->nomTexture = $NomTexture;
	}
    /**
     * Set couleurTexture
     *
     * @param string $couleurTexture
     * @return Texture
     */
    public function setCouleurTexture($couleurTexture)
    {
        $this->couleurTexture = $couleurTexture;

        return $this;
    }

    /**
     * Get couleurTexture
     *
     * @return string 
     */
    public function getCouleurTexture()
    {
        return $this->couleurTexture;
    }
}
