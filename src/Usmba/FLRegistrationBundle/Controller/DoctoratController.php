<?php

namespace Usmba\FLRegistrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DoctoratController extends Controller
{
    public function doctoratAction()
    {
        return $this->render('InscriptionBundle:Doctorat:doctorat.html.twig', array(
            // ...
        ));
    }

}
