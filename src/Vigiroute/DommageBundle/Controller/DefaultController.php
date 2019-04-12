<?php

namespace Vigiroute\DommageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DommageBundle:Default:index.html.twig');
    }
}
