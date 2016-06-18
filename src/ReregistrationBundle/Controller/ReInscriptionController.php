<?php

namespace ReregistrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ReInscriptionController extends Controller
{
    public function indexAction()
    {
        return $this->render('ReregistrationBundle:Inscription:indexReInscription.html.twig', [
            
        ]);
    }

    public function checkingAction(Request $request)
    {
        $cne = $request->request->get('cne');

        dump($cne);
        return $this->render('ReregistrationBundle:Inscription:formReInscription.html.twig', [

        ]);
    }
}
