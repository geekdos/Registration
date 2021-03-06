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

use ReregistrationBundle\Entity\EtudiantLicence;

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
     * @param Request $request
     * @param EtudiantLicence $etudiantLicence
     * @return null|RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function registerNewUser(Request $request, EtudiantLicence $etudiantLicence)
    {
        /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
        $userManager = $this->get('fos_user.user_manager');
        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');

        $user = $userManager->createUser();
        $user->setEnabled(true);
        $user->setEmail($etudiantLicence->getEmail());
        $user->setUsername($etudiantLicence->getCne());
        $user->setPlainPassword($etudiantLicence->getCin());

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
     * Creates a new EtudiantLicence entity.
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function newAction(Request $request)
    {
        $inscription = $this->getTheRepo('Configuration')->isTheInscriptionOnline();
        $inscriptionLicence     = $this->getTheRepo('Configuration')->isTheInscriptionLicenceOnline();

        if ($inscription == null OR $inscriptionLicence == null)
            return $this->render(':errors:404.html.twig');


        $etudiantLicence = new EtudiantLicence();
        $form = $this->createForm('ReregistrationBundle\Form\EtudiantLicenceType', $etudiantLicence);
        $form->handleRequest($request);
        $session = new Session();

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            $this->registerNewUser($request, $etudiantLicence);
            $etudiantDeug->setStatus(1);
            $etudiantDeug->setInscriptionStatus(1);
            $etudiantDeug->setAdmit(0);
            
            $em->persist($etudiantLicence);
            $em->flush();
            $session->getFlashBag()->add('infos', 'messages.infos.inscription_licence');
            $session->set('id', $etudiantLicence->getId());
            return $this->redirectToRoute('etudiantlicence_show', array('id' => $etudiantLicence->getId()));
        }

        return $this->render('etudiantlicence/new.html.twig', array(
            'etudiantLicence' => $etudiantLicence,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a EtudiantLicence entity.
     * @param EtudiantLicence $etudiantLicence
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction(EtudiantLicence $etudiantLicence)
    {
        try {
            $session = new Session();
            if ($session->get('id') == $etudiantLicence->getId() || $this->isGranted('ROLE_ADMIN')) {
                $deleteForm = $this->createDeleteForm($etudiantLicence);

                return $this->render('etudiantlicence/show.html.twig', array(
                    'etudiantLicence' => $etudiantLicence,
                    'delete_form' => $deleteForm->createView(),
                ));
            } else {
                $session->getFlashBag()->add('errors', 'errors.cne');
                return $this->render(':errors:404.html.twig');
            }
        }catch (NotFoundHttpException $e){
            return $this->render(':errors:404.html.twig');
        }
    }

    /**
     * Displays a form to edit an existing EtudiantLicence entity.
     * @param Request $request
     * @param EtudiantLicence $etudiantLicence
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function editAction(Request $request, EtudiantLicence $etudiantLicence)
    {       
        $session = new Session();

        if ($session->get('id') == $etudiantLicence->getId() || $this->isGranted('ROLE_ADMIN')) {
            $deleteForm = $this->createDeleteForm($etudiantLicence);
            $editForm = $this->createForm('ReregistrationBundle\Form\EtudiantLicenceType', $etudiantLicence);
            $editForm->handleRequest($request);
    
            if ($editForm->isSubmitted() && $editForm->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $etudiantLicence->setInscriptionStatus(1);
                $em->persist($etudiantLicence);
                $em->flush();
    
                return $this->redirectToRoute('etudiantlicence_show', array('id' => $etudiantLicence->getId()));
            }
    
            return $this->render('etudiantlicence/edit.html.twig', array(
                'etudiantLicence' => $etudiantLicence,
                'edit_form' => $editForm->createView(),
                'delete_form' => $deleteForm->createView(),
            ));
        }else{
            $session->getFlashBag()->add('errors', 'error_cne');
            return $this->render(':errors:404.html.twig');
        }
    }

    /**
     * Deletes a EtudiantLicence entity.
     * @param Request $request
     * @param EtudiantLicence $etudiantLicence
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteAction(Request $request, EtudiantLicence $etudiantLicence)
    {
        if ($this->isGranted('ROLE_ADMIN')) {
            $form = $this->createDeleteForm($etudiantLicence);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->remove($etudiantLicence);
                $em->flush();
            }

            return $this->redirectToRoute('etudiantlicence_index');
        }
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

    /**
     * @param $entity
     * @return \Doctrine\Common\Persistence\ObjectRepository
     */
    public function getTheRepo($entity)
    {
        return $em = $this->getDoctrine()->getManager()->getRepository('ReregistrationBundle:'.$entity);
    }
}
