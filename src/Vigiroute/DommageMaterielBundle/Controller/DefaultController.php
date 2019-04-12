<?php

namespace Vigiroute\DommageMaterielBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DommageMaterielBundle:Default:index.html.twig');
    }
}
