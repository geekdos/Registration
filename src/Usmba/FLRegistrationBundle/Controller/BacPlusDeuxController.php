<?php

namespace Usmba\FLRegistrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Usmba\FLRegistrationBundle\Entity\Etudiant;
use Usmba\FLRegistrationBundle\Form\Type\EtudiantType;

class BacPlusDeuxController extends Controller
{
    public function bacPlusDeuxAction(Request $request)
    {
        $session = new Session();
        $student = new Etudiant();
        $form = $this->createForm(EtudiantType::class, $student);
        $form->handleRequest($request);

        if ($form->isValid()){
            $student = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($student);
            $em->flush();

            $session->getFlashBag()->add('success', 'Vos information sont bien enregistrer dans la base de donnée');

            return $this->redirectToRoute('usmba_fl_registration_homepage');
        }

        return $this->render('BacPlusDeux/bac_plus_deux.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}
