<?php

namespace ReregistrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestTemplateController extends Controller
{
    public function indexAction()
    {
        return $this->render('ReregistrationBundle:TestTemplate:index.html.twig', array(
            // ...
        ));
    }

}
