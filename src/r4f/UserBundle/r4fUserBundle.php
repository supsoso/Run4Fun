<?php

namespace r4f\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class r4fUserBundle extends Bundle
{
	public function indexAction()
    {
        return new Response("Hello World !");
    }
}