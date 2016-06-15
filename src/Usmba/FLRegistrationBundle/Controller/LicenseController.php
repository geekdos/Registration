<?php

namespace Usmba\FLRegistrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LicenseController extends Controller
{
    public function licenseAction()
    {
        return $this->render('InscriptionBundle:License:license.html.twig', array(
            // ...
        ));
    }

}
