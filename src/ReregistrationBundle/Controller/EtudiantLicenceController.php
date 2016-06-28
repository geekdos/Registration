<?php

namespace ReregistrationBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ReregistrationBundle\Entity\EtudiantLicence;
use ReregistrationBundle\Form\EtudiantLicenceType;

/**
 * EtudiantLicence controller.
 *
 */
class EtudiantLicenceController extends Controller
{
    /**
     * Lists all EtudiantLicence entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $etudiantLicences = $em->getRepository('ReregistrationBundle:EtudiantLicence')->findAll();

        return $this->render('etudiantlicence/index.html.twig', array(
            'etudiantLicences' => $etudiantLicences,
        ));
    }

    /**
     * Creates a new EtudiantLicence entity.
     *
     */
    public function newAction(Request $request)
    {
        $etudiantLicence = new EtudiantLicence();
        $form = $this->createForm('ReregistrationBundle\Form\EtudiantLicenceType', $etudiantLicence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($etudiantLicence);
            $em->flush();

            return $this->redirectToRoute('etudiantlicence_show', array('id' => $etudiantLicence->getId()));
        }

        return $this->render('etudiantlicence/new.html.twig', array(
            'etudiantLicence' => $etudiantLicence,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a EtudiantLicence entity.
     *
     */
    public function showAction(EtudiantLicence $etudiantLicence)
    {
        $deleteForm = $this->createDeleteForm($etudiantLicence);

        return $this->render('etudiantlicence/show.html.twig', array(
            'etudiantLicence' => $etudiantLicence,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing EtudiantLicence entity.
     *
     */
    public function editAction(Request $request, EtudiantLicence $etudiantLicence)
    {
        $deleteForm = $this->createDeleteForm($etudiantLicence);
        $editForm = $this->createForm('ReregistrationBundle\Form\EtudiantLicenceType', $etudiantLicence);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($etudiantLicence);
            $em->flush();

            return $this->redirectToRoute('etudiantlicence_show', array('id' => $etudiantLicence->getId()));
        }

        return $this->render('etudiantlicence/edit.html.twig', array(
            'etudiantLicence' => $etudiantLicence,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a EtudiantLicence entity.
     *
     */
    public function deleteAction(Request $request, EtudiantLicence $etudiantLicence)
    {
        $form = $this->createDeleteForm($etudiantLicence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($etudiantLicence);
            $em->flush();
        }

        return $this->redirectToRoute('etudiantlicence_index');
    }

    /**
     * Creates a form to delete a EtudiantLicence entity.
     *
     * @param EtudiantLicence $etudiantLicence The EtudiantLicence entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(EtudiantLicence $etudiantLicence)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('etudiantlicence_delete', array('id' => $etudiantLicence->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
