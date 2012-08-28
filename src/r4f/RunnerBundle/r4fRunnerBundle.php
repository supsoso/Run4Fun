<?php

namespace r4f\RunnerBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class r4fRunnerBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}


