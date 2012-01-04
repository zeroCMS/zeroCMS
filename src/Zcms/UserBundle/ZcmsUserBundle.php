<?php

namespace Zcms\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ZcmsUserBundle extends Bundle {

    public function getParent() {
        return 'FOSUserBundle';
    }

}
