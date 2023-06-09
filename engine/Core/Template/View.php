<?php 
namespace Engine\Core\Template;

use Engine\DI\DI;
use Cms_6s\Model\Menu\Menu;

class View
{
    public $di;
    protected $theme;
    protected $setting;
    protected $menu;
    public function __construct(DI $di)
    {
        $this->di = $di;
        $this->theme = new Theme();
        $this->setting = new Setting($di);
        $this->menu = new Menu($di);
    }
    /**
     * Summary of render
     * @param mixed $template
     * @param mixed $vars
     * @throws \InvalidArgumentException
     * @return void
     */
    public function render(string $template, array $vars= [])
    {
        $functions = Theme::getThemePath().'/functions.php';
        if (file_exists($functions)){
            include_once $functions;
        }
        $templatePath = $this->getTemplatePath($template, ENV);
        if(!is_file($templatePath)) {
            throw new \InvalidArgumentException(
                sprintf('Template "%s" not found in "%s', $template, $templatePath)
            );
        }
        $vars['lang'] = $this->di->get('language');
        
        $this->theme->setData($vars);
        extract($vars);
        ob_start();
        ob_implicit_flush(0);
        try {
            require $templatePath;
        } catch (\Exception $e) {
            ob_end_clean();
            throw $e;
        }
        echo ob_get_clean();
    }
    /**
     * Summary of getTemplatePath
     * @param mixed $template
     * @param mixed $env
     * @return string
     */
    private function getTemplatePath($template, $env = null)
    {
        if ($env === 'Cms_6s') {
            return ROOT_DIR . '/content/themes/default/' . $template . '.php';
        }

        return path('view') . '/' . $template . '.php';
    
    }
    
}
?>