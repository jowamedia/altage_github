<?php

namespace Altage\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Altage\UserBundle\Entity\Group;

class LoadRoleData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $RoleAdmin = new Group();
        $RoleAdmin->setName('Administrateur');
        $RoleAdmin->setRole('ROLE_ADMIN');

        $RoleSite = new Group();
        $RoleSite->setName('User du Site');
        $RoleSite->setRole('ROLE_SITE_USER');

        $RoleCuisine = new Group();
        $RoleCuisine->setName('Cuisinier');
        $RoleCuisine->setRole('ROLE_CUISINE');


        $RoleSecretaire = new Group();
        $RoleSecretaire->setName('Secrétaire');
        $RoleSecretaire->setRole('ROLE_SECRETAIRE');
        
        $manager->persist($RoleAdmin);
        $manager->persist($RoleSite);
        $manager->persist($RoleCuisine);
        $manager->persist($RoleSecretaire);
        $manager->flush();
    }
}