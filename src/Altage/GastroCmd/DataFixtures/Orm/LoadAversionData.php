<?php

namespace Altage\GastroCmd\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Altage\GastroCmd\Entity\Aversion;

class LoadAversionData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

    $Aversion1	=	new Aversion();	
    $Aversion1	->setNomAversion(	'Végétarien'	);
    $Aversion1	->setCouleurAversion(	'#FFFFFF'	);

    $Aversion2	=	new Aversion();	
    $Aversion2	->setNomAversion(	'S/porc\rS/agneau'	);
    $Aversion2	->setCouleurAversion(	'#FFFFFF'	);

    $Aversion3	=	new Aversion();	
    $Aversion3	->setNomAversion(	'S/agneau'	);
    $Aversion3	->setCouleurAversion(	'#FFFFFF'	);

    $Aversion4	=	new Aversion();	
    $Aversion4	->setNomAversion(	'S/abats'	);
    $Aversion4	->setCouleurAversion(	'#FFFFFF'	);

    $Aversion5	=	new Aversion();	
    $Aversion5	->setNomAversion(	'S/poisson'	);
    $Aversion5	->setCouleurAversion(	'#FFFFFF'	);

    $Aversion6	=	new Aversion();	
    $Aversion6	->setNomAversion(	'S/œuf'	);
    $Aversion6	->setCouleurAversion(	'#FFFFFF'	);

    $Aversion7	=	new Aversion();	
    $Aversion7	->setNomAversion(	'S/fromage'	);
    $Aversion7	->setCouleurAversion(	'#FFFFFF'	);

    $Aversion8	=	new Aversion();	
    $Aversion8	->setNomAversion(	'S/riz'	);
    $Aversion8	->setCouleurAversion(	'#FFFFFF'	);

    $Aversion9	=	new Aversion();	
    $Aversion9	->setNomAversion(	'S/polenta'	);
    $Aversion9	->setCouleurAversion(	'#FFFFFF'	);

    $Aversion10	=	new Aversion();	
    $Aversion10	->setNomAversion(	'S/céréales'	);
    $Aversion10	->setCouleurAversion(	'#FFFFFF'	);

    $Aversion11	=	new Aversion();	
    $Aversion11	->setNomAversion(	'S/légumineuses'	);
    $Aversion11	->setCouleurAversion(	'#FFFFFF'	);

    $Aversion12	=	new Aversion();	
    $Aversion12	->setNomAversion(	'S/tomates'	);
    $Aversion12	->setCouleurAversion(	'#FFFFFF'	);

    $Aversion13	=	new Aversion();	
    $Aversion13	->setNomAversion(	'S/choux'	);
    $Aversion13	->setCouleurAversion(	'#FFFFFF'	);

    $Aversion14	=	new Aversion();	
    $Aversion14	->setNomAversion(	'S/poivrons'	);
    $Aversion14	->setCouleurAversion(	'#FFFFFF'	);

    $Aversion15	=	new Aversion();	
    $Aversion15	->setNomAversion(	'S/champignons'	);
    $Aversion15	->setCouleurAversion(	'#FFFFFF'	);
        
        $manager->persist($Aversion1);
        $manager->persist($Aversion2);
        $manager->persist($Aversion3);
        $manager->persist($Aversion4);
        $manager->persist($Aversion5);
        $manager->persist($Aversion6);
        $manager->persist($Aversion7);
        $manager->persist($Aversion8);
        $manager->persist($Aversion9);
        $manager->persist($Aversion10);
        $manager->persist($Aversion11);
        $manager->persist($Aversion12);
        $manager->persist($Aversion13);
        $manager->persist($Aversion14);
        $manager->persist($Aversion15);
        
        $manager->flush();
    }
}