<?php

namespace Usmba\FLRegistrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BacPlusDeuxController extends Controller
{
    public function bacPlusDeuxAction()
    {
        return $this->render('InscriptionBundle:BacPlusDeux:bac_plus_deux.html.twig', array(
            // ...
        ));
    }

}
