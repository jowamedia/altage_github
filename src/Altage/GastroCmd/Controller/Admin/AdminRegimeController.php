<?php

namespace Altage\GastroCmd\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Altage\GastroCmd\Entity\Regime;

/**
 * Description of AddRegimeController
 * Générer un formulaire pour la saisie d'une texture
 * Collecter les valeurs du formulaire et les sauver dans la DB
 * @author jowa
 */

class AdminRegimeController extends Controller 
{
    // Fonction pour afficher un formulaire d'ajout d'un collaborateur
    public function AddRegimeAction()
    {
        // On crée un objet Regime
        $regime = new Regime;
        // On crée le FormBuilder grâce à la méthode du contrôleur  
        // On ajoute les champs de l'entité que l'on veut à notre formulaire
        $form = $this->createFormBuilder($regime)
                     ->add('nomRegime',       'text')
                     ->add('couleurRegime',   'text')
                     ->add('Enregistrer',      'submit')
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
            $em->persist($regime);
            $em->flush();

            // On redirige vers la page de visualisation des collaborateurs
            return $this->redirect($this->generateUrl('_AdminDispRegime'));
          }
        }
        // On passe la méthode createView() du formulaire à la vue afin qu'elle puisse afficher le formulaire toute seule
        return $this->render('AltageGastroCmd:App:Admin/add_particularite.html.twig', array(
          'form' => $form->createView(),));
    }
    
    // Fonction pour afficher la liste des collaborateurs
    public function DispRegimeAction()
    {
        // On récupère le dépôt collaborateur
        $repository = $this->getDoctrine()
            ->getRepository('Altage\GastroCmd\Entity\Regime');
        // On collècte tout
        $regime = $repository->findAll();
        
         return $this->render('AltageGastroCmd:App:Admin/disp_particularites.html.twig', array(
            'particularite' => $regime));     
    }

    // Fonction pour afficher l'édition d'un collaborateur
    public function EditRegimeAction($id)
    {
        // On crée un objet Regime
        $regime = new Regime;
        // Récupération d'un collabo déjà existant, d'id $id.
        $regime = $this->getDoctrine()
                            ->getRepository('Altage\GastroCmd\Entity\Regime')
                            ->find($id);
      
        // On crée le FormBuilder grâce à la méthode du contrôleur  
        // On ajoute les champs de l'entité que l'on veut à notre formulaire
        $form = $this->createFormBuilder($regime)
                     ->add('nomRegime',       'text')
                     ->add('couleurRegime',   'text')
                     ->add('Enregistrer',      'submit')
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
            $em->persist($regime);
            $em->flush();

            // On redirige vers la page de visualisation des collaborateurs
            return $this->redirect($this->generateUrl('_AdminDispRegime'));
          }
        }
        // On passe la méthode createView() du formulaire à la vue afin qu'elle puisse afficher le formulaire toute seule
        return $this->render('AltageGastroCmd:App:Admin/add_particularite.html.twig', array(
          'form' => $form->createView(),));
    }    
}
