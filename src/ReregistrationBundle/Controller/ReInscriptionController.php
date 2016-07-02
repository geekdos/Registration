<?php

namespace ReregistrationBundle\Controller;

use ReregistrationBundle\Entity\Etudiant;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class ReInscriptionController extends Controller
{
    public function indexAction()
    {
        return $this->render('Inscription/indexReInscription.html.twig', [
            
        ]);
    }

    public function checkingDeugAction(Request $request)
    {
        $cne = $request->request->get('cne');

        if ($cne == $this->getUser()->getUsername()){
            $em = $this->getDoctrine()->getManager();
            $etudiant = $em->getRepository('ReregistrationBundle:EtudiantLicence')->findOneBy([
                'cne' => $cne
            ]);
            return $this->redirectToRoute('etudiantlicence_edit', [
                'id' => $etudiant->getId()
            ]);
        }else{
            $session = new Session();
            $session->getFlashBag()->add('errors', 'Vous navez pas le droit de rechercher par ce CNE');
            return $this->render(':ReInscription:licenceCnePage.html.twig', [
                //
            ]);
        }
    }

    public function checkingLicenceAction(Request $request)
    {
        $cne = $request->request->get('cne');

        if ($cne == $this->getUser()->getUsername()){
            $em = $this->getDoctrine()->getManager();
            $etudiant = $em->getRepository('ReregistrationBundle:EtudiantLicence')->findOneBy([
                'cne' => $cne
            ]);
            return $this->redirectToRoute('etudiantlicence_edit', [
                'id' => $etudiant->getId()
            ]);
        }else{
            $session = new Session();
            $session->getFlashBag()->add('errors', 'Vous navez pas le droit de rechercher par ce CNE');
            return $this->render(':ReInscription:licenceCnePage.html.twig', [
                //
            ]);
        }
    }
    public function checkingMasterAction(Request $request)
    {
        $cne = $request->request->get('cne');

        if ($cne == $this->getUser()->getUsername()){
            $em = $this->getDoctrine()->getManager();
            $etudiant = $em->getRepository('ReregistrationBundle:EtudiantMaster')->findOneBy([
                'cne' => $cne
            ]);
            return $this->redirectToRoute('etudiantmaster_edit', [
                'id' => $etudiant->getId()
            ]);
        }else{
            $session = new Session();
            $session->getFlashBag()->add('errors', 'Vous navez pas le droit de rechercher par ce CNE');
            return $this->render(':ReInscription:masterCnePage.html.twig', [
                //
            ]);
        }
    }
    public function checkingDoctoratAction(Request $request)
    {
        $cne = $request->request->get('cne');

        if ($cne == $this->getUser()->getUsername()){
            $em = $this->getDoctrine()->getManager();
            $etudiant = $em->getRepository('ReregistrationBundle:EtudiantDoctorat')->findOneBy([
                'cne' => $cne
            ]);
            return $this->redirectToRoute('etudiantdoctorat_edit', [
                'id' => $etudiant->getId()
            ]);
        }else{
            $session = new Session();
            $session->getFlashBag()->add('errors', 'Vous navez pas le droit de rechercher par ce CNE');
            return $this->render(':ReInscription:masterCnePage.html.twig', [
                //
            ]);
        }
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
