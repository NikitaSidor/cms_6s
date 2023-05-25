<?php 
namespace Engine\Service\Database;
use Engine\Core\Database\Connection;
use Engine\Service\AbstractProvider;
use Engine\Core\Database;

class Provider extends AbstractProvider
{
    public $serviseName = 'db';
    public function init()
    {
        $db = new Connection();
        $this->di->set($this->serviseName, $db);
    }
}
?>