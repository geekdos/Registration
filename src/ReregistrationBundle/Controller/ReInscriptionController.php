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

        dump($cne);
        return $this->render('Inscription/formReInscription.html.twig', [

        ]);
    }

    /**
     * Displays a form to edit an existing Etudiant entity.
     *
     */
    public function editAction(Request $request, Etudiant $etudiant)
    {
        $cne = $request->request->get('cne');
        $em = $this->getDoctrine()->getManager();
        $etudiant = $em->getRepository('ReregistrationBundle:Etudiant')->findOneBy([
           'cne' => $cne 
        ]);

        $editForm = $this->createForm('ReregistrationBundle\Form\EtudiantType', $etudiant);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($etudiant);
            $em->flush();

            return $this->redirectToRoute('etudiant_edit', array('id' => $etudiant->getId()));
        }

        return $this->render(':Inscription:reInscriptionForm.html.twig', array(
            'etudiant' => $etudiant,
            'form' => $editForm->createView(),
        ));
    }
}
