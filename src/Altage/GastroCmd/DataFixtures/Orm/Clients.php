<?php

namespace Altage\GastroCmd\DataFixtures\Orm;
// Les fixtures Doctrine permettent de remplir la base de données avec un jeu de données que nous allons définir. 
// Cela permet de pouvoir tester avec des vraies données, sans devoir les retaper à chaque fois : 
// on les inscrit une fois pour toutes, et ensuite elles sont toutes insérées en base de données en une seule commande.

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Altage\GastroCmd\Entity\Client;

class Clients implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
//    $firstNames = array('Hugette', 'Jacque', 'Marcel', 'Hippolyte');
//    $lastNames = array('Dupont', 'Dubois', 'De Montmolin', 'Lemoine');
//    $entryDates = new \DateTime;
//    
//
//    foreach($firstNames as $i => $fisrtName)
//    {
//      // On crée la catégorie
//      $liste_firstNames[$i] = new Client();
//      $liste_firstNames[$i]->setFirstName($firstName);
//      $liste_firstNames[$i]->setLastName($lastName);
//      $liste_firstNames[$i]->setEntryDate($entryDate);
//      
//      // On la persiste
//      $manager->persist($liste_firstNames[$i]);
//    }
//
//    // On déclenche l'enregistrement
//    $manager->flush();
  }
}