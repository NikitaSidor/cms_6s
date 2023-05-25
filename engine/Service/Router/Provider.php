<?php 
namespace Engine\Service\Router;

use Engine\Service\AbstractProvider;
use Engine\Core\Router\Router;

class Provider extends AbstractProvider
{
    public $serviseName = 'router';
    public function init()
    {
        $router = new Router('http://test.nsm1008w.beget.tech/');
        $this->di->set($this->serviseName, $router);
    }
}
?>