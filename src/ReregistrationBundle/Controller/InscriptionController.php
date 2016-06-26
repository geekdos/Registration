<?php

namespace ReregistrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InscriptionController extends Controller
{
    public function indexAction()
    {
        return $this->render('Inscription/indexInscription.html.twig', [
            
        ]);
    }

    public function deugAction()
    {
        return $this->render('Inscription/deugInscription.html.twig', [

        ]);
    }

    public function licenceAction()
    {
        return $this->render('Inscription/licenceInscription.html.twig', [

        ]);
    }

    public function masterAction()
    {
        return $this->render('ReregistrationBundle:Inscription:masterInscription.html.twig', [

        ]);
    }

    public function doctoratAction()
    {
        return $this->render('ReregistrationBundle:Inscription:doctoratInscription.html.twig', [

        ]);
    }
}
