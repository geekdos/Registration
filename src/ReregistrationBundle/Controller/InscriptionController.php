<?php

namespace ReregistrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InscriptionController extends Controller
{
    public function indexAction()
    {
        $inscription = $this->getTheRepo('Configuration')->isTheInscriptionOnline();

        $inscriptionDeug        = $this->getTheRepo('Configuration')->isTheInscriptionDeugOnline();
        $inscriptionLicence     = $this->getTheRepo('Configuration')->isTheInscriptionLicenceOnline();
        $inscriptionMaster      = $this->getTheRepo('Configuration')->isTheInscriptionMasterOnline();
        $inscriptionDoctorat    = $this->getTheRepo('Configuration')->isTheInscriptionDoctotatOnline();

        if ($inscription == null)
            return $this->render(':errors:404.html.twig');

        return $this->render('Inscription/indexInscription.html.twig', [
            'inscriptionDeug'       => $inscriptionDeug,
            'inscriptionLicence'    => $inscriptionLicence,
            'inscriptionMaster'     => $inscriptionMaster,
            'inscriptionDoctorat'   => $inscriptionDoctorat,
        ]);
    }

    /**
     * @param $entity
     * @return \Doctrine\Common\Persistence\ObjectRepository
     */
    public function getTheRepo($entity)
    {
        return $em = $this->getDoctrine()->getManager()->getRepository('ReregistrationBundle:'.$entity);
    }
}
