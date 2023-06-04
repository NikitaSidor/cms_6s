<?php 
namespace Engine\Core\Template;


use Cms_6s\Model\Menu\MenuRepository;
use Engine\DI\DI;

class Menu
{
    protected static $di;
    protected static $menuRepository;
    public function __construct(DI $di) {
        self::$di = $di;
        self::$menuRepository = new MenuRepository(self::$di);
    }
    public static function show()
    {
        
    }
    public static function getItems()
    {
        return self::$menuRepository->getAllItems();
    }
}