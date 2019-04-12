<?php

namespace Vigiroute\GeographieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GeographieBundle:Default:index.html.twig');
    }
}
