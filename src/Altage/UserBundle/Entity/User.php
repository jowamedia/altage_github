<?php

// HelpDoc: http://symfony.com/fr/doc/current/cookbook/security/entity_provider.html
 
namespace Altage\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\EquatableInterface;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;


/**
 * Altage\UserBundle\Entity\User
 *
 * @ORM\Table(name="User")
 * @ORM\Entity(repositoryClass="Altage\UserBundle\Entity\UserRepository")
 */
class User implements AdvancedUserInterface, \Serializable
{

	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @ORM\Column(type="string", length=25, unique=true)
	 */
	private $username;

	/**
	 * @ORM\Column(type="string", length=32)
	 */
	private $salt;

	/**
	 * @ORM\Column(type="string", length=40)
	 */
	private $password;

	/**
	 * @ORM\Column(type="string", length=150, unique=true)
	 */
	private $email;

	/**
	 * @ORM\Column(name="is_active", type="boolean")
	 */
	private $isActive;

	/**
	 * @ORM\Column(type="string", length=80)
	 */
	private $longName;

  /**
	 * @ORM\Column(type="string", length=64)
	 */
	private $address;

    /**
	 * @ORM\Column(type="integer", length=4)
	 */
	private $npa;

   /**
	 * @ORM\Column(type="string", length=40)
	 */
	private $city;

   /**
	 * @ORM\Column(type="string", length=24)
	 */
	private $tel;
  
   /**
   * @ORM\ManyToMany(targetEntity="Altage\GastroCmd\Entity\Client", cascade={"persist"})
   */
  private $client; 
  
   /**
   * @ORM\ManyToMany(targetEntity="Altage\GastroCmd\Entity\Collaborateur", cascade={"persist"})
   */
  private $collaborateur; 
 
    /**
     * @ORM\ManyToMany(targetEntity="Group", inversedBy="users")
     */
    private $groups;
    
    public function __construct()
    {
        $this->groups = new ArrayCollection();
        $this->isActive = true;
        $this->salt = md5(uniqid(null, true));
    }
    
	/**
	 * @inheritDoc
	 */
	public function getUsername()
	{
		return $this->username;
	}

	/**
	 * @inheritDoc
	 */
	public function getSalt()
	{
		return $this->salt;
	}

	/**
	 * @inheritDoc
	 */
	public function getPassword()
	{
		return $this->password;
	}


	/**
	 * @inheritDoc
	 */
	public function eraseCredentials()
	{
	}
	
	public function isEqualTo(UserInterface $user)
	{
		return $this->username === $user->getUsername();
	}
	
 
    public function getRoles()
  {
    return $this->groups->toArray();
    //return array('ROLE_SITE_USER', 'ROLE_SECRETAIRE', 'ROLE_CUISINE', 'ROLE_ADMIN');
  }
	
	public function isAccountNonExpired()
	{
		return true;
	}

	public function isAccountNonLocked()
	{
		return true;
	}

	public function isCredentialsNonExpired()
	{
		return true;
	}

	public function isEnabled()
	{
		return $this->isActive;
	}	

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
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return User
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
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

    /**
     *
     * @return string
     */
    public function serialize()
    {
    	return \json_encode(array(
    			$this->id,
    			$this->username,
    			$this->password,
    			// see section on salt below
    			$this->salt,
    	));
    }
    
    /**
     *
     * @param serialized
     */
    public function unserialize($serialized)
    {
    	list (
    			$this->id,
    			$this->username,
    			$this->password,
    			// see section on salt below
    			$this->salt
    	) = \json_decode($serialized);
    }    

    /**
     * Set longName
     *
     * @param string $longName
     * @return User
     */
    public function setLongName($longName)
    {
        $this->longName = $longName;

        return $this;
    }

    /**
     * Get longName
     *
     * @return string 
     */
    public function getLongName()
    {
        return $this->longName;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return User
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
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
     * Set npa
     *
     * @param integer $npa
     * @return User
     */
    public function setNpa($npa)
    {
        $this->npa = $npa;

        return $this;
    }

    /**
     * Get npa
     *
     * @return integer 
     */
    public function getNpa()
    {
        return $this->npa;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return User
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
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
     * Set tel
     *
     * @param string $tel
     * @return User
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Add client
     *
     * @param \Altage\GastroCmd\Entity\Client $client
     * @return User
     */
    public function addClient(\Altage\GastroCmd\Entity\Client $client)
    {
        $this->client[] = $client;

        return $this;
    }

    /**
     * Remove client
     *
     * @param \Altage\GastroCmd\Entity\Client $client
     */
    public function removeClient(\Altage\GastroCmd\Entity\Client $client)
    {
        $this->client->removeElement($client);
    }

    /**
     * Get client
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Add collaborateur
     *
     * @param \Altage\GastroCmd\Entity\Collaborateur $collaborateur
     * @return User
     */
    public function addCollaborateur(\Altage\GastroCmd\Entity\Collaborateur $collaborateur)
    {
        $this->collaborateur[] = $collaborateur;

        return $this;
    }

    /**
     * Remove collaborateur
     *
     * @param \Altage\GastroCmd\Entity\Collaborateur $collaborateur
     */
    public function removeCollaborateur(\Altage\GastroCmd\Entity\Collaborateur $collaborateur)
    {
        $this->collaborateur->removeElement($collaborateur);
    }

    /**
     * Get collaborateur
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCollaborateur()
    {
        return $this->collaborateur;
    }

    /**
     * Add groups
     *
     * @param \Altage\UserBundle\Entity\Group $groups
     * @return User
     */
    public function addGroup(\Altage\UserBundle\Entity\Group $groups)
    {
        $this->groups[] = $groups;

        return $this;
    }

    /**
     * Remove groups
     *
     * @param \Altage\UserBundle\Entity\Group $groups
     */
    public function removeGroup(\Altage\UserBundle\Entity\Group $groups)
    {
        $this->groups->removeElement($groups);
    }

    /**
     * Get groups
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGroups()
    {
        return $this->groups;
    }
    
   /**
     * Set groups
     *
     * @param Doctrine\Common\Collections\ArrayCollection $groups
     * 
     */

    public function setGroups(\Altage\UserBundle\Entity\Group  $groups)
    {
        $this->groups[] = $groups;

        return $this;
    }
}
