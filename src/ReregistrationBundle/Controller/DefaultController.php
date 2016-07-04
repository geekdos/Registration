<?php

namespace ReregistrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $DEUG       = $this->getTheRepo('EtudiantDeug')->getNbrDEUGStudent();
        $licence    = $this->getTheRepo('EtudiantLicence')->getNbrLicenceStudent();
        $master     = $this->getTheRepo('EtudiantMaster')->getNbrMasterStudent();
        $doctorat   = $this->getTheRepo('EtudiantDoctorat')->getNbrDoctoratStudent();

        $inscription = $this->getTheRepo('Configuration')->isTheInscriptionOnline();
        $re_inscription = $this->getTheRepo('Configuration')->isTheReInscriptionOnline();

        return $this->render('Default/index.html.twig',[
            'nbrDEUG' => $DEUG,
            'nbrLicence' => $licence,
            'nbrMaster' => $master,
            'nbrDoctorat' => $doctorat,
            'inscription' => $inscription,
            're_inscription' => $re_inscription,
        ]);
    }
    
    public function getTheRepo($entity)
    {
        return $em = $this->getDoctrine()->getManager()->getRepository('ReregistrationBundle:'.$entity);
    }
    
}
