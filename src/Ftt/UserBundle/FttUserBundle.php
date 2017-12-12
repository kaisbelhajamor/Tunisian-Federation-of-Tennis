<?php

namespace Ftt\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FttUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
