<?php

namespace Vigiroute\ControleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ControleBundle:Default:index.html.twig');
    }
}
