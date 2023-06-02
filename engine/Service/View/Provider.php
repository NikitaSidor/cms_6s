<?php 
namespace Engine\Service\View;

use Engine\Service\AbstractProvider;
use Engine\Core\Template\View;

class Provider extends AbstractProvider
{
    public $serviseName = 'view';
    public function init()
    {
        $view = new View($this->di);
        $this->di->set($this->serviseName, $view);
    }
}
?>