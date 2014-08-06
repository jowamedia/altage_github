<?php

namespace Altage\GastroCmd\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\Form\FormInterface;
//use Symfony\Component\Form\AbstractType;
//use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Altage\GastroCmd\Entity\Collaborateur;

/**
 * Description of AddCollaborateurController
 * Générer un formulaire pour la saisie d'un collaborateur
 * Collecter les valeurs du formulaire et les sauver dans la DB
 * @author jowa
 */

class AdminCollaborateurController extends Controller 
{
    // Fonction pour afficher un formulaire d'ajout d'un collaborateur
    public function AddCollaboAction()
    {
        // On crée un objet Collaborateur
        $collaborateur = new Collaborateur;
        // On crée le FormBuilder grâce à la méthode du contrôleur  
        // On ajoute les champs de l'entité que l'on veut à notre formulaire
        $form = $this->createFormBuilder($collaborateur)
                     ->add('siteId',       'integer')
                     ->add('email',        'email')
                     ->add('firstName',    'text')
                     ->add('lastName',     'text')
                     ->add('entryDate',    'date',      array('widget' => 'single_text',
                                                              'format' => 'dd.MM.yyyy',
                                                              'model_timezone' => "Europe/Zurich",
                                                              'view_timezone' => "Europe/Zurich",
                                                              'empty_value' => 'date d\'entrée',
                                                              'attr' => array('class' => 'form-control date-picker'),
                                                             ))
                     ->add('save', 'submit')
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
            $em->persist($collaborateur);
            $em->flush();

            // On redirige vers la page de visualisation des collaborateurs
            return $this->redirect($this->generateUrl('_AdminDispCollaborateur'));
          }
        }
        // On passe la méthode createView() du formulaire à la vue afin qu'elle puisse afficher le formulaire toute seule
        return $this->render('AltageGastroCmd:App:Admin/add_collaborateur.html.twig', array(
          'form' => $form->createView(),));
    }
    
    // Fonction pour afficher la liste des collaborateurs
    public function DispCollaboAction()
    {
        // On récupère le dépôt collaborateur
        $repository = $this->getDoctrine()
            ->getRepository('Altage\GastroCmd\Entity\Collaborateur');
        // On collècte les collabo du site
        $collaborateur = $repository->findBy(array('siteId' => '1'));
        
         return $this->render('AltageGastroCmd:App:Admin/disp_collaborateur.html.twig', array(
            'collaborateur' => $collaborateur));     
    }

    // Fonction pour afficher l'édition d'un collaborateur
    public function EditCollaboAction($id)
    {
        // On crée un objet Collaborateur
        $collaborateur = new Collaborateur;
        // Récupération d'un collabo déjà existant, d'id $id.
        $collaborateur = $this->getDoctrine()
                            ->getRepository('Altage\GastroCmd\Entity\Collaborateur')
                            ->find($id);
      
        // On crée le FormBuilder grâce à la méthode du contrôleur  
        // On ajoute les champs de l'entité que l'on veut à notre formulaire
        $form = $this->createFormBuilder($collaborateur)
                     ->add('siteId',       'integer')
                     ->add('email',        'email')
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
                     ->add('isActive', 'checkbox', array('label' => 'Est actif ? (cocher si oui)','required' => false,))
                     ->add('save', 'submit')
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
            $em->persist($collaborateur);
            $em->flush();

            // On redirige vers la page de visualisation des collaborateurs
            return $this->redirect($this->generateUrl('_AdminDispCollaborateur'));
          }
        }
        // On passe la méthode createView() du formulaire à la vue afin qu'elle puisse afficher le formulaire toute seule
        return $this->render('AltageGastroCmd:App:Admin/add_collaborateur.html.twig', array(
          'form' => $form->createView(),));
    }    
}
