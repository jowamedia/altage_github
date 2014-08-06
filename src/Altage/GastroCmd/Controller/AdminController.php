<?php

namespace Altage\GastroCmd\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AdminController extends Controller
{
    public function AddClientAction()
    {
        /*
         * The action's view can be rendered using render() method
         * or @Template annotation as demonstrated in DemoController.
         *
         */
        return $this->render('AltageGastroCmd:App:Admin/add_client.html.twig');
    }

    public function AddSiteAction()
    {
    
    	return $this->render('AltageGastroCmd:App:Admin/add_site.html.twig');
    }
}
