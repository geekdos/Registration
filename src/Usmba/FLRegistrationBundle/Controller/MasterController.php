<?php

namespace Usmba\FLRegistrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MasterController extends Controller
{
    public function masterAction()
    {
        return $this->render('Master/master.html.twig', array(
            // ...
        ));
    }

}
