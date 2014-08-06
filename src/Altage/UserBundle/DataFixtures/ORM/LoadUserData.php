<?php

namespace Altage\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Altage\UserBundle\Entity\User;

// HelpDoc : http://symfony.com/fr/doc/current/bundles/DoctrineFixturesBundle/index.html

class LoadUserData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
/*
        // Les noms d'utilisateurs à créer
        $noms = array('winzou', 'John', 'Talus');

        foreach ($noms as $i => $nom) {
          // On crée l'utilisateur
          $users[$i] = new User;

          // Le nom d'utilisateur et le mot de passe sont identiques
          $users[$i]->setUsername($nom);
          $users[$i]->setPassword($nom);
          $users[$i]->setEmail($nom &'@altage.ch');
          $users[$i]->setLongName($nom);
          $users[$i]->setAddress('rue de lHôpital 31');
          $users[$i]->setNpa('1400');
          $users[$i]->setCity('Yverdon-les-Bains');
          $users[$i]->setTel('024 424 04 50');

          // Le sel et les rôles sont vides pour l'instant
          $users[$i]->setSalt('');
          $users[$i]->setRoles(array());

          // On le persiste
          $manager->persist($users[$i]);
        }

        // On déclenche l'enregistrement
        $manager->flush();        
*/
// Liste des noms de catégorie à ajouter
/*        $userNames  = array('admin', 'sanssouci');
        $password   = array('123456', '123456');
        $email      = array('admin@altage.ch', 'ss@altage.ch');
        $longName   = array('administrateur', 'Sans Soucis');
        $address    = array('rue de lHôpital 31', 'ch de la Forêt 3');
        $npa        = array('1400', '1400', 'De Montmolin');
        $city       = array('Yverdon-les-Bains', 'Yverdon-les-Bains');
        $tel        = array('024 424 04 50', '024 712 58 79');
        //$role       = array();


        foreach($userNames as $i => $userName)
        {
          // On crée la catégorie
          $liste_users[$i] = new User();
          $liste_users[$i]->setUserName($userName);
          $liste_users[$i]->setPassword($password);
          $liste_users[$i]->setEmail($email);
          $liste_users[$i]->setLongName($longName);
          $liste_users[$i]->setAddress($address);
          $liste_users[$i]->setNpa($npa);
          $liste_users[$i]->setCity($city);
          $liste_users[$i]->setTel($tel);

          // On la persiste
          $manager->persist($liste_users[$i]);
        }

        // On déclenche l'enregistrement
        $manager->flush();
 * 
 */
    }
}