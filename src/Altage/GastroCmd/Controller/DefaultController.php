<?php

namespace Altage\GastroCmd\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AltageGastroCmd:Welcome:index.html.twig');
    }

    public function projectsAction()
    {
        return $this->render('AltageGastroCmd:Welcome:index.html.twig');
    }

    public function addProjectAction()
    {
        return $this->render('AltageGastroCmd:Welcome:index.html.twig');
    }

    public function employeesAction()
    {
        return $this->render('AltageGastroCmd:Welcome:index.html.twig');
    }

    public function addEmployeeAction()
    {
        return $this->render('AltageGastroCmd:Welcome:index.html.twig');
    }

    public function profileAction()
    {
        return $this->render('AltageGastroCmd:Welcome:index.html.twig');
    }
}