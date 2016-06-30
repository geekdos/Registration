<?php

namespace GeekDos\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GeekDosUserBundle:Default:index.html.twig');
    }
}
