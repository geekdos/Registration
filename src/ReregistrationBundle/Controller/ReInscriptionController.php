<?php

namespace ReregistrationBundle\Controller;

use ReregistrationBundle\Entity\Etudiant;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ReInscriptionController extends Controller
{
    public function indexAction()
    {
        return $this->render('Inscription/indexReInscription.html.twig', [
            
        ]);
    }

    public function checkingAction(Request $request)
    {
        $cne = $request->request->get('cne');
        $em = $this->getDoctrine()->getManager();
        $etudiant = $em->getRepository('ReregistrationBundle:Etudiant')->findOneBy([
            'cne' => $cne
        ]);
        $request->getSession()->set('id', $etudiant->getId());
        return $this->redirectToRoute('etudiant_edit', array('id' => $etudiant->getId()));
    }
}
