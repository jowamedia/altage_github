<?php

namespace Altage\UserBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;
use Altage\UserBundle\Entity\User;
use Doctrine\ORM\Entity\Repository;


/**
 * Description of AddUserController
 * Générer un formulaire pour la saisie d'un site/user
 * Collecter les valeurs du formulaire et les sauver dans la DB
 * @author jowa
 */

class AdminUserController extends Controller 
{
    // Fonction pour afficher un formulaire d'ajout d'un client
    public function AddUserAction()
    {
        // On crée un objet User
        $user = new User;
        
        // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();
        
        // On récupère toutes les textures :
//        $liste_textures = $em->getRepository('AltageGastroCmd:Texture')
//                               ->findAll();
        
        // On crée le FormBuilder grâce à la méthode du contrôleur  
        // On ajoute les champs de l'entité que l'on veut à notre formulaire
        $form = $this->createFormBuilder($user)
                     ->add('username',      'text')
                     ->add('email',         'email')
                     ->add('password',      'password')
                     ->add('longName',      'text')
                     ->add('address',       'text')
                     ->add('npa',           'text')
                     ->add('city',          'text')
                     ->add('tel',           'text')
                     ->add('groups',        'entity', array('class' => 'AltageUserBundle:Group',
                                                        'property' => 'name',
                                                        'expanded' => false,
                                                        'multiple' => false,
                                                        'empty_value' => 'Choisissez une option',
                                                         ))
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
            $factory = $this->get('security.encoder_factory');
            $user = new \Altage\UserBundle\Entity\User();
            $encoder = $factory->getEncoder($user);
            $password = $encoder->encodePassword(password, $user->getSalt());
            $user->setPassword($password);

            // On l'enregistre notre objet $article dans la base de données
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            // On redirige vers la page de visualisation des clients
            return $this->redirect($this->generateUrl('_AdminDispUser'));
          }
        }
        // On passe la méthode createView() du formulaire à la vue afin qu'elle puisse afficher le formulaire toute seule
        return $this->render('AltageUserBundle:App:Admin/add_user.html.twig', array(
          'form' => $form->createView(),));
    }
    
    // Fonction pour afficher la liste des client
    public function DispUserAction()
    {
        $em = $this->getDoctrine()
                    ->getManager();
        // On récupère le dépôt client
        $users = $em->getRepository('AltageUserBundle:User')
                        ->findAll();

        foreach($users as $user){
            // On récupère les role du user
            $user->getRoles();
         }

         return $this->render('AltageUserBundle:App:Admin/disp_user.html.twig', array(
            'users' => $users,));     
    }

    // Fonction pour afficher l'édition d'un client
    public function EditUserAction($id)
    {
        // On crée un objet User
        $user = new User;
        // Récupération d'un client déjà existant, d'id $id.
        $user = $this->getDoctrine()
                            ->getRepository('AltageUserBundle:User')
                            ->find($id);
      
        // On crée le FormBuilder grâce à la méthode du contrôleur  
        // On ajoute les champs de l'entité que l'on veut à notre formulaire
        $form = $this->createFormBuilder($user)
                     ->add('username',      'text')
                     ->add('email',         'email')
                     ->add('password',      'password')
                     ->add('longName',      'text')
                     ->add('address',       'text')
                     ->add('npa',           'text')
                     ->add('city',          'text')
                     ->add('tel',           'text')
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
            $em->persist($user);
            $em->flush();

            // On redirige vers la page de visualisation des clients
            return $this->redirect($this->generateUrl('_AdminDispUser'));
          }
        }
        // On passe la méthode createView() du formulaire à la vue afin qu'elle puisse afficher le formulaire toute seule
        return $this->render('AltageUserBundle:App:Admin/add_user.html.twig', array(
          'form' => $form->createView(),));
    }    
}
