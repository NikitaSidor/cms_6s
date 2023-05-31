<?php 
namespace Engine\Service\Load;

use Engine\Service\AbstractProvider;
use Engine\Load;

class Provider extends AbstractProvider
{
    public $serviseName = 'load';
    public function init()
    {
        $load = new Load();
        $this->di->set($this->serviseName, $load);
    }
}
?>