<?php

namespace GeekDos\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class GeekDosUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
