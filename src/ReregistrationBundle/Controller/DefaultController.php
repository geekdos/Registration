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

        return $this->render('Default/index.html.twig',[
            'nbrDEUG' => $DEUG,
            'nbrLicence' => $licence,
            'nbrMaster' => $master,
            'nbrDoctorat' => $doctorat,
        ]);
    }
    
    public function getTheRepo($entity)
    {
        return $em = $this->getDoctrine()->getManager()->getRepository('ReregistrationBundle:'.$entity);
    }
    
}
