<?php

namespace ReregistrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class ChoixFiliereController extends Controller
{
    public function indexAction(Request $request)
    {
        $filiere_id = $request->get('filiere');
        return $this->redirectToRoute('etudiant_new', [
            'filiere_id' => $filiere_id
        ]);
    }

    public function filiereListeAction($parcours_id)
    {
        $filireLicence = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('ReregistrationBundle:Filiere')
            ->findBy([
                'parcours' => $parcours_id
            ])
        ;
        return $this->render(':Includes:licenceFilires.html.twig',[
            'filireLicence' => $filireLicence
        ]);
    }
}
