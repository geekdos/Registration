<?php

namespace ReregistrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

class GeneratePDFController extends Controller
{
    public function createPdfAction(Request $request)
    {
        $cne = $request->get('cne');

        if ($cne == $this->getUser()->getUsername()){
            $em = $this->getDoctrine()->getManager();
            $etudiant = $em->getRepository('ReregistrationBundle:EtudiantLicence')->findOneBy([
                'cne' => $cne
            ]);

            $html = $this->renderView(':GeneratePDF:create_pdf.html.twig', array(
                'etudiant'  => $etudiant
            ));

            $filename = $etudiant->getCin().'_'.$etudiant->getCne().'.pdf';
            /*
            return $this->render('@Reregistration/GeneratePDF/create_pdf.html.twig',[
                'etudiant'  => $etudiant
            ]);
            */
            return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
                200,
                array(
                    'Content-Type'          => 'application/pdf',
                    'Content-Disposition'   => 'attachment; filename="'.$filename.'"'
                )
            );
        }else{
            $session = new Session();
            $session->getFlashBag()->add('errors', 'errors.cne');
            
            return $this->render(':errors:404.html.twig');
        }

    }

}
