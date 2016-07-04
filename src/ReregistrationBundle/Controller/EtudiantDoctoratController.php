<?php

namespace ReregistrationBundle\Controller;

use FOS\UserBundle\FOSUserEvents;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Session\Session;

use ReregistrationBundle\Entity\EtudiantDoctorat;

/**
 * EtudiantDoctorat controller.
 *
 */
class EtudiantDoctoratController extends Controller
{
    /**
     * Lists all EtudiantDoctorat entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $etudiantDoctorats = $em->getRepository('ReregistrationBundle:EtudiantDoctorat')->findAll();

        return $this->render('etudiantdoctorat/index.html.twig', array(
            'etudiantDoctorats' => $etudiantDoctorats,
        ));
    }
    
    public function registerNewUser(Request $request, EtudiantDoctorat $etudiantDoctorat)
    {
        /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
        $userManager = $this->get('fos_user.user_manager');
        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');

        $user = $userManager->createUser();
        $user->setEnabled(true);
        $user->setEmail($etudiantDoctorat->getEmail());
        $user->setUsername($etudiantDoctorat->getCne());
        $user->setPlainPassword($etudiantDoctorat->getCin());

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::REGISTRATION_INITIALIZE, $event);

        $dispatcher->dispatch(FOSUserEvents::REGISTRATION_SUCCESS, $event);

        $userManager->updateUser($user);

        if (null === $response = $event->getResponse()) {
            $url = $this->generateUrl('fos_user_registration_confirmed');
            $response = new RedirectResponse($url);
        }

        $dispatcher->dispatch(FOSUserEvents::REGISTRATION_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

        return $response;
    }
    /**
     * Creates a new EtudiantDoctorat entity.
     *
     */
    public function newAction(Request $request)
    {
        $inscription = $this->getTheRepo('Configuration')->isTheInscriptionOnline();
        $inscriptionDoctorat    = $this->getTheRepo('Configuration')->isTheInscriptionDoctotatOnline();

        if ($inscription == null OR $inscriptionDoctorat == null)
            return $this->render(':errors:404.html.twig');

        $etudiantDoctorat = new EtudiantDoctorat();
        $form = $this->createForm('ReregistrationBundle\Form\EtudiantDoctoratType', $etudiantDoctorat);
        $form->handleRequest($request);
        $session = new Session();

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $this->registerNewUser($request, $etudiantDoctorat);
            $em->persist($etudiantDoctorat);
            $em->flush();
            $session->getFlashBag()->add('infos', 'messages.infos.inscription_licence');
            $session->set('id', $etudiantDoctorat->getId());
            return $this->redirectToRoute('etudiantdoctorat_show', array('id' => $etudiantDoctorat->getId()));
        }

        return $this->render('etudiantdoctorat/new.html.twig', array(
            'etudiantDoctorat' => $etudiantDoctorat,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a EtudiantDoctorat entity.
     *
     */
    public function showAction(EtudiantDoctorat $etudiantDoctorat)
    {

        $session = new Session();
        if ($session->get('id') == $etudiantLicence->getId()) {
            $deleteForm = $this->createDeleteForm($etudiantDoctorat);
    
            return $this->render('etudiantdoctorat/show.html.twig', array(
                'etudiantDoctorat' => $etudiantDoctorat,
                'delete_form' => $deleteForm->createView(),
            ));
        }else{
            $session->getFlashBag()->add('errors', 'Vous navez pas le droit de rechercher par ce CNE');
            return $this->render(':errors:404.html.twig');
        }
    }

    /**
     * Displays a form to edit an existing EtudiantDoctorat entity.
     *
     */
    public function editAction(Request $request, EtudiantDoctorat $etudiantDoctorat)
    {
        $session = new Session();
        if ($session->get('id') == $etudiantLicence->getId()) {
            $deleteForm = $this->createDeleteForm($etudiantDoctorat);
            $editForm = $this->createForm('ReregistrationBundle\Form\EtudiantDoctoratType', $etudiantDoctorat);
            $editForm->handleRequest($request);

            if ($editForm->isSubmitted() && $editForm->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($etudiantDoctorat);
                $em->flush();

                return $this->redirectToRoute('etudiantdoctorat_edit', array('id' => $etudiantDoctorat->getId()));
            }

            return $this->render('etudiantdoctorat/edit.html.twig', array(
                'etudiantDoctorat' => $etudiantDoctorat,
                'edit_form' => $editForm->createView(),
                'delete_form' => $deleteForm->createView(),
            ));
        }else{
            $session->getFlashBag()->add('errors', 'Vous navez pas le droit de rechercher par ce CNE');
            return $this->render(':errors:404.html.twig');
        }
    }

    /**
     * Deletes a EtudiantDoctorat entity.
     *
     */
    public function deleteAction(Request $request, EtudiantDoctorat $etudiantDoctorat)
    {
        $form = $this->createDeleteForm($etudiantDoctorat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($etudiantDoctorat);
            $em->flush();
        }

        return $this->redirectToRoute('etudiantdoctorat_index');
    }

    /**
     * Creates a form to delete a EtudiantDoctorat entity.
     *
     * @param EtudiantDoctorat $etudiantDoctorat The EtudiantDoctorat entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(EtudiantDoctorat $etudiantDoctorat)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('etudiantdoctorat_delete', array('id' => $etudiantDoctorat->getId())))
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
