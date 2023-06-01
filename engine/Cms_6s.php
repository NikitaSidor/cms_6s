<?php 
namespace Engine;
use Engine\Core\Router\DispathedRoute;
use Engine\Helper\Common;

class Cms_6s {
    private $di;
    public $router;
    /**
     * Summary of __construct
     * @param mixed $di
     */
    public function __construct($di)
    {
        $this->di = $di;
        $this->router = $this->di->get('router');
    }
    /**
     * Summary of run
     * @return void
     */
    public function run()
    {
        try {
            require_once ROOT_DIR.'/' . mb_strtolower(ENV) . '/Route.php';
            $routerDispatch = $this->router->dispatch(Common::getMethod(), Common::getPathUrl());
            if ($routerDispatch == null) {
                $routerDispatch = new DispathedRoute('ErrorController:page404');
            }
            list($class, $action) =explode(':', $routerDispatch->getController(), 2);
            
            $controller = '\\' . ENV . '\\Controller\\'.$class;
            $parameters = $routerDispatch->getParameters();
            call_user_func_array([new $controller($this->di), $action], $parameters);
        } catch (\Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }
}
?>