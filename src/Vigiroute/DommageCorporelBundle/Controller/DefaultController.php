<?php

namespace Vigiroute\DommageCorporelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DommageCorporelBundle:Default:index.html.twig');
    }
}
