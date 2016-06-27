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

    public function checkingDeugAction(Request $request)
    {
        $cne = $request->request->get('cne');
        $em = $this->getDoctrine()->getManager();
        $etudiant = $em->getRepository('ReregistrationBundle:EtudiantLicence')->findOneBy([
            'cne' => $cne
        ]);
        $request->getSession()->set('id', $etudiant->getId());
        return $this->redirectToRoute('etudiantlicence_edit', array('id' => $etudiant->getId()));
    }

    public function checkingLicenceAction(Request $request)
    {
        $cne = $request->request->get('cne');
        $em = $this->getDoctrine()->getManager();
        $etudiant = $em->getRepository('ReregistrationBundle:EtudiantLicence')->findOneBy([
            'cne' => $cne
        ]);
        $request->getSession()->set('id', $etudiant->getId());
        return $this->redirectToRoute('etudiantlicence_edit', array('id' => $etudiant->getId()));
    }
    public function checkingMasterAction(Request $request)
    {
        $cne = $request->request->get('cne');
        $em = $this->getDoctrine()->getManager();
        $etudiant = $em->getRepository('ReregistrationBundle:EtudiantMaster')->findOneBy([
            'cne' => $cne
        ]);
        $request->getSession()->set('id', $etudiant->getId());
        return $this->redirectToRoute('etudiantmaster_edit', array('id' => $etudiant->getId()));
    }
    public function checkingDoctoratAction(Request $request)
    {
        $cne = $request->request->get('cne');
        $em = $this->getDoctrine()->getManager();
        $etudiant = $em->getRepository('ReregistrationBundle:EtudiantDoctorat')->findOneBy([
            'cne' => $cne
        ]);
        $request->getSession()->set('id', $etudiant->getId());
        return $this->redirectToRoute('etudiantdoctorat_edit', array('id' => $etudiant->getId()));
    }
    
    public function deugCnePageAction(Request $request){
        return $this->render('ReInscription/deugCnePage.html.twig', [

        ]);
    }

    public function licenceCnePageAction(Request $request){
        return $this->render('ReInscription/licenceCnePage.html.twig', [

        ]);
    }

    public function masterCnePageAction(Request $request){
        return $this->render('ReInscription/masterCnePage.html.twig', [

        ]);
    }

    public function doctoratCnePageAction(Request $request){
        return $this->render('ReInscription/doctoratCnePage.html.twig', [

        ]);
    }
}
