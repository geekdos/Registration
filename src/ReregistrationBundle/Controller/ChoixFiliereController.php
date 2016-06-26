<?php

namespace ReregistrationBundle\Controller;

use ReregistrationBundle\Entity\Filiere;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class ChoixFiliereController extends Controller
{
    public function indexAction(Request $request)
    {   $session = new Session();
        $filiere = $request->get('filiere');
        $choix = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('ReregistrationBundle:Filiere')
            ->findOneBy([
                'id' => $filiere
            ])
        ;
        $request->getSession()->set('choix', $choix);
        return $this->redirectToRoute('etudiant_new', [
            'choix' => $choix
        ]);
    }

    public function filiereListeAction(Request $request, $parcours_id)
    {
        $filireLicence = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('ReregistrationBundle:Filiere')
            ->findBy([
                'parcours' => $parcours_id
            ])
        ;

        return $this->render(':Includes:licenceFilires.html.twig', array(
            'filireLicence' => $filireLicence,
        ));
    }
}
