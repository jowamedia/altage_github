<?php

// HelpDoc: http://symfony.com/fr/doc/current/cookbook/security/entity_provider.html

namespace Altage\UserBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NoResultException;

class UserRepository extends EntityRepository implements UserProviderInterface
{
    public function loadUserByUsername($username)
    {
        $q = $this
            ->createQueryBuilder('u')
            ->select('u, g')
            ->leftJoin('u.groups', 'g')
            ->where('u.username = :username OR u.email = :email')
            ->setParameter('username', $username)
            ->setParameter('email', $username)
            ->getQuery();

        try {
          // La méthode Query::getSingleResult() lance une exception
          // s'il n'y a pas d'entrée correspondante aux critéres
          $user = $q->getSingleResult();
        } catch (NoResultException $e) {
            throw new UsernameNotFoundException(sprintf('Unable to find an active admin AltageUserBundle:User object identified by "%s".', $username), 0, $e);
        }

				return $user;
		}

		public function refreshUser(UserInterface $user)
		{
        $class = get_class($user);
        if (!$this->supportsClass($class)) {
            throw new UnsupportedUserException(
                sprintf('Instances of "%s" are not supported.',$class)
            );
		}

        return $this->find($user->getId());
    }

    public function supportsClass($class)
    {
				return $this->getEntityName() === $class || is_subclass_of($class, $this->getEntityName());
}
}