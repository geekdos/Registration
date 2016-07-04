<?php

namespace ReregistrationBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

use ReregistrationBundle\Entity\EtudiantDeug;

/**
 * EtudiantDeug controller.
 *
 */
class EtudiantDeugController extends Controller
{
    /**
     * Lists all EtudiantDeug entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $etudiantDeugs = $em->getRepository('ReregistrationBundle:EtudiantDeug')->findAll();

        return $this->render('etudiantdeug/index.html.twig', array(
            'etudiantDeugs' => $etudiantDeugs,
        ));
    }

    /**
     * Creates a new EtudiantDeug entity.
     *
     */
    public function newAction(Request $request)
    {
        $inscription = $this->getTheRepo('Configuration')->isTheInscriptionOnline();
        $inscriptionDeug        = $this->getTheRepo('Configuration')->isTheInscriptionDeugOnline();

        if ($inscription == null OR $inscriptionDeug == null)
            return $this->render(':errors:404.html.twig');

        $etudiantDeug = new EtudiantDeug();
        $form = $this->createForm('ReregistrationBundle\Form\EtudiantDeugType', $etudiantDeug);
        $form->handleRequest($request);
        $session = new Session();

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($etudiantDeug);
            $etudiantDeug->setInscriptionStatus(1);
            $em->flush();
            $session->getFlashBag()->add('infos', 'messages.infos.inscription_licence');
            $session->set('id', $etudiantDeug->getId());
            return $this->redirectToRoute('etudiantdeug_show', array('id' => $etudiantDeug->getId()));
        }

        return $this->render('etudiantdeug/new.html.twig', array(
            'etudiantDeug' => $etudiantDeug,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a EtudiantDeug entity.
     *
     */
    public function showAction(EtudiantDeug $etudiantDeug)
    {
        $session = new Session();
        if ($session->get('id') == $etudiantDeug->getId() || $this->isGranted('ROLE_ADMIN')) {
            $deleteForm = $this->createDeleteForm($etudiantDeug);
    
            return $this->render('etudiantdeug/show.html.twig', array(
                'etudiantDeug' => $etudiantDeug,
                'delete_form' => $deleteForm->createView(),
            ));
        }else{
            $session->getFlashBag()->add('errors', 'Vous navez pas le droit de rechercher par ce CNE');
            return $this->render(':errors:404.html.twig');
        }
    }

    /**
     * Displays a form to edit an existing EtudiantDeug entity.
     *
     */
    public function editAction(Request $request, EtudiantDeug $etudiantDeug)
    {

        $session = new Session();

        if ($session->get('id') == $etudiantLicence->getId()) {
            $deleteForm = $this->createDeleteForm($etudiantDeug);
            $editForm = $this->createForm('ReregistrationBundle\Form\EtudiantDeugType', $etudiantDeug);
            $editForm->handleRequest($request);

            if ($editForm->isSubmitted() && $editForm->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $etudiantDeug->setInscriptionStatus(1);
                $em->persist($etudiantDeug);
                $em->flush();

                return $this->redirectToRoute('etudiantdeug_show', array('id' => $etudiantDeug->getId()));
            }

            return $this->render('etudiantdeug/edit.html.twig', array(
                'etudiantDeug' => $etudiantDeug,
                'edit_form' => $editForm->createView(),
                'delete_form' => $deleteForm->createView(),
            ));
        }else{
            $session->getFlashBag()->add('errors', 'Vous navez pas le droit de rechercher par ce CNE');
            return $this->render(':errors:404.html.twig');
        }
    }

    /**
     * Deletes a EtudiantDeug entity.
     *
     */
    public function deleteAction(Request $request, EtudiantDeug $etudiantDeug)
    {
        $form = $this->createDeleteForm($etudiantDeug);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($etudiantDeug);
            $em->flush();
        }

        return $this->redirectToRoute('etudiantdeug_index');
    }

    /**
     * Creates a form to delete a EtudiantDeug entity.
     *
     * @param EtudiantDeug $etudiantDeug The EtudiantDeug entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(EtudiantDeug $etudiantDeug)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('etudiantdeug_delete', array('id' => $etudiantDeug->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
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
