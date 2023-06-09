<?php 
namespace Engine\Core\Customize;

use Engine\DI\DI;

class Customize
{
    public static $di;
    protected $config;
    private static $instance = null;
    public function __construct(DI $di)
    {
        static::$di = $di;
        $this->config = new Config();
    }
    public function getConfig()
    {
        return $this->config;
    }
    protected function __clone()
    {

    }
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self(static::$di);
        }
    
        return self::$instance;
    }
    public function getAdminMenuItems()
    {
        return $this->getConfig()->get('dashboardMenu');
    }
}