<?php

namespace ReregistrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager()->getRepository('ReregistrationBundle:Etudiant');

        $DEUG = $em->getNbrDEUGStudent();
        $licence = $em->getNbrLicenceStudent();
        $master = $em->getNbrMasterStudent();
        $doctorat = $em->getNbrDoctoratStudent();

        return $this->render('Default/index.html.twig',[
            'nbrDEUG' => $DEUG,
            'nbrLicence' => $licence,
            'nbrMaster' => $master,
            'nbrDoctorat' => $doctorat,
        ]);
    }
}
