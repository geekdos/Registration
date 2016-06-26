<?php

namespace ReregistrationBundle\Controller;

use ReregistrationBundle\Entity\Filiere;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ReregistrationBundle\Entity\Etudiant;
use ReregistrationBundle\Form\EtudiantType;

/**
 * Etudiant controller.
 *
 */
class EtudiantController extends Controller
{
    /**
     * Lists all Etudiant entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $etudiants = $em->getRepository('ReregistrationBundle:Etudiant')->findAll();

        return $this->render('etudiant/index.html.twig', array(
            'etudiants' => $etudiants,
        ));
    }

    /**
     * Creates a new Etudiant entity.
     *
     */
    public function newAction(Request $request, $parcours_id)
    {
        $etudiant = new Etudiant();
        $form = $this->createForm('ReregistrationBundle\Form\EtudiantType', $etudiant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            /*
            $filiere = $request->getSession()->get('choix');
            dump($filiere->getId());
            $etudiant->setFiliere($filiere);
            dump($etudiant);
            */
            $em->persist($etudiant);
            $em->flush();
            return $this->redirectToRoute('etudiant_show', array('id' => $etudiant->getId()));
        }

        return $this->render('etudiant/new.html.twig', array(
            'etudiant' => $etudiant,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Etudiant entity.
     *
     */
    public function showAction(Etudiant $etudiant)
    {
        $deleteForm = $this->createDeleteForm($etudiant);

        return $this->render('etudiant/show.html.twig', array(
            'etudiant' => $etudiant,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Etudiant entity.
     *
     */
    public function editAction(Request $request, Etudiant $etudiant)
    {
        $deleteForm = $this->createDeleteForm($etudiant);
        $editForm = $this->createForm('ReregistrationBundle\Form\EtudiantType', $etudiant);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($etudiant);
            $em->flush();
            return $this->redirectToRoute('etudiant_edit', array('id' => $etudiant->getId()));
        }
        return $this->render('etudiant/edit.html.twig', array(
            'etudiant' => $etudiant,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Etudiant entity.
     *
     */
    public function deleteAction(Request $request, Etudiant $etudiant)
    {
        $form = $this->createDeleteForm($etudiant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($etudiant);
            $em->flush();
        }

        return $this->redirectToRoute('etudiant_index');
    }

    /**
     * Creates a form to delete a Etudiant entity.
     *
     * @param Etudiant $etudiant The Etudiant entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Etudiant $etudiant)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('etudiant_delete', array('id' => $etudiant->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
