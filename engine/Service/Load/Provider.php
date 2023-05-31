<?php

namespace Engine\Service\Load;

use Engine\Service\AbstractProvider;
use Engine\Load;

class Provider extends AbstractProvider
{
    protected $serviceName = 'load';

    public function init()
    {
        $this->di->set($this->serviceName, new Load());
    }
}