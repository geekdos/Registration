<?php

namespace ReregistrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class ValidationController extends Controller   
{
    public function validateAction($cne, $parcours, $format)
    {
        $etudiant = $this->getTheRepo('Etudiant'.$parcours)->findOneBy(array(
           'cne' => $cne 
        ));
        
        if (!$etudiant){
            return $this->render(':errors:404.html.twig');
        }
        
        $em = $this->getDoctrine()->getManager();
        $etudiant->setInscriptionStatus(1);

        if ($format == 'json'){
            $etudiant->setAdmit(1);
            $em->persist($etudiant);
            $admit = true;
        }else{
            $etudiant->setAdmit(1);
            $em->persist($etudiant);
            $admit = false;
        }
        $em->flush();
        $data = array(
            'admit' => $admit,
        );
        $response = new JsonResponse($data);
        return $response;
    }

    /**
     * @param $entity
     * @return \Doctrine\Common\Persistence\ObjectRepository
     */
    private function getTheRepo($entity)
    {
        return $em = $this->getDoctrine()->getManager()->getRepository('ReregistrationBundle:'.$entity);
    }

}
