<?php 
namespace Engine\Service\Customize;

use Engine\Service\AbstractProvider;
use Engine\Core\Customize\Customize;

class Provider extends AbstractProvider
{
    public $serviseName = 'customize';
    public function init()
    {
        $customize = new Customize($this->di);

        $this->di->set($this->serviseName, $customize);
        return $this;
    }
}
?>