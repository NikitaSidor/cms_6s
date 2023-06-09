<?php

namespace Engine\Service\Load;

use Engine\Service\AbstractProvider;
use Engine\Load;

class Provider extends AbstractProvider
{
    protected $serviceName = 'load';

    public function init()
    {
        $load = new Load($this->di);
        $this->di->set($this->serviceName, $load);
    }
}