<?php

namespace Vigiroute\GendarmerieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GendarmerieBundle:Default:index.html.twig');
    }
}
