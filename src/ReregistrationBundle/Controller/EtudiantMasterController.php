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

use ReregistrationBundle\Entity\EtudiantMaster;

/**
 * EtudiantMaster controller.
 *
 */
class EtudiantMasterController extends Controller
{
    /**
     * Lists all EtudiantMaster entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $etudiantMasters = $em->getRepository('ReregistrationBundle:EtudiantMaster')->findAll();

        return $this->render('etudiantmaster/index.html.twig', array(
            'etudiantMasters' => $etudiantMasters,
        ));
    }

    /**
     * @param Request $request
     * @param EtudiantMaster $etudiantMaster
     * @return RedirectResponse
     */
    public function registerNewUser(Request $request, EtudiantMaster $etudiantMaster)
    {
        /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
        $userManager = $this->get('fos_user.user_manager');
        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');

        $user = $userManager->createUser();
        $user->setEnabled(true);
        $user->setEmail($etudiantMaster->getEmail());
        $user->setUsername($etudiantMaster->getCne());
        $user->setPlainPassword($etudiantMaster->getCin());

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
     * Creates a new EtudiantMaster entity.
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function newAction(Request $request)
    {
        $inscription = $this->getTheRepo('Configuration')->isTheInscriptionOnline();
        $inscriptionMaster      = $this->getTheRepo('Configuration')->isTheInscriptionMasterOnline();

        if ($inscription == null OR $inscriptionMaster == null)
            return $this->render(':errors:404.html.twig');

        $etudiantMaster = new EtudiantMaster();
        $form = $this->createForm('ReregistrationBundle\Form\EtudiantMasterType', $etudiantMaster);
        $form->handleRequest($request);
        $session = new Session();

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            $this->registerNewUser($request, $etudiantMaster);
            $etudiantDeug->setStatus(1);
            $etudiantDeug->setInscriptionStatus(1);
            $etudiantDeug->setAdmit(0);

            $em->persist($etudiantMaster);
            $em->flush();
            $session->getFlashBag()->add('infos', 'messages.infos.inscription_master');
            $session->set('id', $etudiantMaster->getId());
            return $this->redirectToRoute('etudiantmaster_show', array('id' => $etudiantMaster->getId()));
        }

        return $this->render('etudiantmaster/new.html.twig', array(
            'etudiantMaster' => $etudiantMaster,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a EtudiantMaster entity.
     * @param EtudiantMaster $etudiantMaster
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction(EtudiantMaster $etudiantMaster)
    {
        try {
            $session = new Session();
            if ($session->get('id') == $etudiantLicence->getId()) {
                $deleteForm = $this->createDeleteForm($etudiantMaster);

                return $this->render('etudiantmaster/show.html.twig', array(
                    'etudiantMaster' => $etudiantMaster,
                    'delete_form' => $deleteForm->createView(),
                ));
            } else {
                $session->getFlashBag()->add('errors', 'errors.cne');
                return $this->render(':errors:404.html.twig');
            }
        }catch (Exception $e){
            return $this->render(':errors:404.html.twig');
        }
    }

    /**
     * Displays a form to edit an existing EtudiantMaster entity.
     * @param Request $request
     * @param EtudiantMaster $etudiantMaster
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function editAction(Request $request, EtudiantMaster $etudiantMaster)
    {
        $session = new Session();
        if ($session->get('id') == $etudiantLicence->getId()) {
            $deleteForm = $this->createDeleteForm($etudiantMaster);
            $editForm = $this->createForm('ReregistrationBundle\Form\EtudiantMasterType', $etudiantMaster);
            $editForm->handleRequest($request);

            if ($editForm->isSubmitted() && $editForm->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($etudiantMaster);
                $em->flush();

                return $this->redirectToRoute('etudiantmaster_edit', array('id' => $etudiantMaster->getId()));
            }

            return $this->render('etudiantmaster/edit.html.twig', array(
                'etudiantMaster' => $etudiantMaster,
                'edit_form' => $editForm->createView(),
                'delete_form' => $deleteForm->createView(),
            ));
        }else{
            $session->getFlashBag()->add('errors', 'Vous navez pas le droit de rechercher par ce CNE');
            return $this->render(':errors:404.html.twig');
        }
    }

    /**
     * Deletes a EtudiantMaster entity.
     * @param Request $request
     * @param EtudiantMaster $etudiantMaster
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteAction(Request $request, EtudiantMaster $etudiantMaster)
    {

        $form = $this->createDeleteForm($etudiantMaster);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($etudiantMaster);
            $em->flush();
        }

        return $this->redirectToRoute('etudiantmaster_index');
    }

    /**
     * Creates a form to delete a EtudiantMaster entity.
     *
     * @param EtudiantMaster $etudiantMaster The EtudiantMaster entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(EtudiantMaster $etudiantMaster)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('etudiantmaster_delete', array('id' => $etudiantMaster->getId())))
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
