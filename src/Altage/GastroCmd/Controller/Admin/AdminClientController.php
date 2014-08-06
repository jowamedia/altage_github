<?php

namespace Altage\GastroCmd\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Altage\GastroCmd\Entity\Client;
use Doctrine\ORM\EntityRepository;

/**
 * Description of AddClientController
 * Générer un formulaire pour la saisie d'un client
 * Collecter les valeurs du formulaire et les sauver dans la DB
 * @author jowa
 */

class AdminClientController extends Controller 
{
    // Fonction pour afficher un formulaire d'ajout d'un client
    public function AddClientAction()
    {
        // On crée un objet Client
        $client = new Client;
        
        // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();
        
        // On récupère toutes les textures :
//        $liste_textures = $em->getRepository('AltageGastroCmd:Texture')
//                               ->findAll();
        
        // On crée le FormBuilder grâce à la méthode du contrôleur  
        // On ajoute les champs de l'entité que l'on veut à notre formulaire
        $form = $this->createFormBuilder($client)
                     ->add('firstName',    'text')
                     ->add('lastName',     'text')
                     ->add('entryDate',    'date',  array('widget' => 'single_text',
                                                        'format' => 'dd.MM.yyyy',
                                                        'model_timezone' => 'Europe/Zurich',
                                                        'view_timezone' => 'Europe/Zurich',
                                                        'empty_value' => 'date d\'entrée',
                                                        'attr' => array('class' => 'form-control date-picker'),
                                                       ))
                     ->add('texture', 'entity', array('class' => 'AltageGastroCmd:Texture',
                                                      'property' => 'nomTexture',
                                                      'multiple' => true,
                                                     ))
                     ->add('regime', 'entity', array('class' => 'AltageGastroCmd:Regime',
                                                      'property' => 'nomRegime',
                                                      'multiple' => true,
                                                     ))
                     ->add('aversion', 'entity', array('class' => 'AltageGastroCmd:Aversion',
                                                      'property' => 'nomAversion',
                                                      'multiple' => true,
                                                     ))
                     ->add('allergie', 'entity', array('class' => 'AltageGastroCmd:Allergie',
                                                      'property' => 'nomAllergie',
                                                      'multiple' => true,
                                                     ))
                     ->add('user', 'entity', array('class' => 'AltageUserBundle:User',
                                                      'property' => 'longName',
                                                      'multiple' => true,
                                                     ))
                ->add('Enregistrer', 'submit')
                     ->getForm();

        
        // On récupère la requête
        $request = $this->get('request');
    
        // On vérifie qu'elle est de type POST
        if ($request->getMethod() == 'POST') {
          // On fait le lien Requête <-> Formulaire
          // À partir de maintenant, la variable $article contient les valeurs entrées dans le formulaire par le visiteur
          $form->bind($request);

          // On vérifie que les valeurs entrées sont correctes
          // (Nous verrons la validation des objets en détail dans le prochain chapitre)
          if ($form->isValid()) {
            // On l'enregistre notre objet $article dans la base de données
            $em = $this->getDoctrine()->getManager();
            $em->persist($client);
            $em->flush();

            // On redirige vers la page de visualisation des clients
            return $this->redirect($this->generateUrl('_AdminDispClient'));
          }
        }
        // On passe la méthode createView() du formulaire à la vue afin qu'elle puisse afficher le formulaire toute seule
        return $this->render('AltageGastroCmd:App:Admin/add_client.html.twig', array(
          'form' => $form->createView(),));
    }
    
    // Fonction pour afficher la liste des client
    public function DispClientAction()
    {
        $em = $this->getDoctrine()
                    ->getManager();
        // On récupère le dépôt client
        $clients = $em->getRepository('AltageGastroCmd:Client')
                        ->findAll();

        foreach($clients as $client){
            // On récupère les texture pour le client
            $client->getTexture();
         }

         return $this->render('AltageGastroCmd:App:Admin/disp_client.html.twig', array(
            'clients' => $clients,));     
    }

    // Fonction pour afficher l'édition d'un client
    public function EditClientAction($id)
    {
        // On crée un objet Client
        $client = new Client;
        // Récupération d'un client déjà existant, d'id $id.
        $client = $this->getDoctrine()
                            ->getRepository('Altage\GastroCmd\Entity\Client')
                            ->find($id);
      
        // On crée le FormBuilder grâce à la méthode du contrôleur  
        // On ajoute les champs de l'entité que l'on veut à notre formulaire
        $form = $this->createFormBuilder($client)
                     ->add('firstName',    'text')
                     ->add('lastName',     'text')
                     ->add('entryDate',    'date',      array('widget' => 'single_text',
                                                              'format' => 'dd.MM.yyyy',
                                                              'model_timezone' => "Europe/Zurich",
                                                              'view_timezone' => "Europe/Zurich",
                                                              'empty_value' => 'date d\'entrée',
                                                              'attr' => array('class' => 'form-control date-picker'),
                                                             ))
                     ->add('leaveDate',    'date',      array('widget' => 'single_text',
                                                              'format' => 'dd.MM.yyyy',
                                                              'model_timezone' => "Europe/Zurich",
                                                              'view_timezone' => "Europe/Zurich",
                                                              'required' => FALSE,
                                                              'attr' => array('class' => 'form-control date-picker'),
                                                             ))
                     ->add('texture', 'entity', array('class' => 'AltageGastroCmd:Texture',
                                                      'property' => 'nomTexture',
                                                      'multiple' => true,
                                                     ))
                     ->add('regime', 'entity', array('class' => 'AltageGastroCmd:Regime',
                                                      'property' => 'nomRegime',
                                                      'multiple' => true,
                                                     ))
                     ->add('aversion', 'entity', array('class' => 'AltageGastroCmd:Aversion',
                                                      'property' => 'nomAversion',
                                                      'multiple' => true,
                                                     ))
                     ->add('allergie', 'entity', array('class' => 'AltageGastroCmd:Allergie',
                                                      'property' => 'nomAllergie',
                                                      'multiple' => true,
                                                     ))                                                                    
                                                                    
                     ->add('isActive', 'checkbox', array('label' => 'Est actif ? (cocher si oui)','required' => false,))
                     ->add('Enregistrer', 'submit')
                     ->getForm();

        // On récupère la requête
        $request = $this->get('request');
    
        // On vérifie qu'elle est de type POST
        if ($request->getMethod() == 'POST') {
          // On fait le lien Requête <-> Formulaire
          // À partir de maintenant, la variable $article contient les valeurs entrées dans le formulaire par le visiteur
          $form->bind($request);

          // On vérifie que les valeurs entrées sont correctes
          // (Nous verrons la validation des objets en détail dans le prochain chapitre)
          if ($form->isValid()) {
            // On l'enregistre notre objet $article dans la base de données
            $em = $this->getDoctrine()->getManager();
            $em->persist($client);
            $em->flush();

            // On redirige vers la page de visualisation des clients
            return $this->redirect($this->generateUrl('_AdminDispClient'));
          }
        }
        // On passe la méthode createView() du formulaire à la vue afin qu'elle puisse afficher le formulaire toute seule
        return $this->render('AltageGastroCmd:App:Admin/add_client.html.twig', array(
          'form' => $form->createView(),));
    }    
}
