<?php

namespace Altage\GastroCmd\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav');

        $menu->addChild('Projects', array('route' => 'altage_hello_projects'))
            ->setAttribute('icon', 'icon-list');
        
        $menu->addChild('Employees', array('route' => 'altage_hello_employees'))
        ->setAttribute('icon', 'icon-group');
        
       # $menu->addChild('About Me', array(
       #     'route' => 'page_show',
       #     'routeParameters' => array('id' => 42)
       # ));
        $menu->addChild('Home by uri', array('uri' => '/'));
        $menu->addChild('Comments', array('uri' => '#comments'));
        $menu->addChild('Symfony2', array('uri' => 'http://symfony-reloaded.org/'));
        // ... add more children

        return $menu;
    }
    public function userMenu(FactoryInterface $factory, array $options)
    {
    	$menu = $factory->createItem('root');
    	$menu->setChildrenAttribute('class', 'nav pull-right');
    
    	/*
    	 You probably want to show user specific information such as the username here. That's possible! Use any of the below methods to do this.
    
    	if($this->container->get('security.context')->isGranted(array('ROLE_ADMIN', 'ROLE_USER'))) {} // Check if the visitor has any authenticated roles
    	$username = $this->container->get('security.context')->getToken()->getUser()->getUsername(); // Get username of the current logged in user
    
    	*/
    	$menu->addChild('User', array('label' => 'Hi visitor'))
    	->setAttribute('dropdown', true)
    	->setAttribute('icon', 'icon-user');
    
    	$menu['User']->addChild('Edit profile', array('route' => 'altage_hello_profile'))
    	->setAttribute('icon', 'icon-edit');
    
    	return $menu;
    }
}