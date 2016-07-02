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

            $html = $this->renderView('ReregistrationBundle:GeneratePDF:create_pdf.html.twig', array(
                'etudiant'  => $etudiant
            ));

            $filename = $etudiant->getCin().'_'.$etudiant->getCne();

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
            $session->getFlashBag()->add('errors', 'Vous navez pas le droit de rechercher par ce CNE');
            
            return $this->render(':errors:404.html.twig');
        }

    }

}
