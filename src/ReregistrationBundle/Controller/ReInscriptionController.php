<?php

namespace ReregistrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ReInscriptionController extends Controller
{
    public function indexAction()
    {
        return $this->render('ReregistrationBundle:Inscription:indexReInscription.html.twig', [
            
        ]);
    }
}
