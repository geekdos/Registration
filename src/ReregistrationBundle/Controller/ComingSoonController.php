<?php

namespace ReregistrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ComingSoonController extends Controller
{
    public function indexAction()
    {
        return $this->render(':errors:coming_soon.html.twig', array(
            // ...
        ));
    }

}
