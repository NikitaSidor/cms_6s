<?php 
namespace Engine\Core\Template;

use Engine\Core\Config\Config;

class Theme
{
    const URL_THEME_MASK = '%s/content/themes/%s';
    const RULES_NAME_FILE = [
        'header' => 'header-%s',
        'footer' => 'footer-%s',
        'sidebar' => 'sidebar-%s',
    ];
    protected static string $url = '';
    protected static array $data = [];
    public $asset;
    public $theme;
    public function __construct() {
<<<<<<< HEAD
        $this->theme = $this;
        $this->asset = new Asset();
=======
        $this->asset = new Asset();
        $this->theme = $this;
>>>>>>> origin
    }

    public static function getUrl($name = null)
    {
        $curentTheme = Config::item('defaultTheme', 'main');
        $baseUrl = Config::item('baseUrl', 'main');
        return sprintf(self::URL_THEME_MASK, $baseUrl, $curentTheme);
    }
    /**
     * Summary of header
     * @param mixed $name
     * @return void
     */
    public static function header($name = null)
    {
        $name = (string) $name;
        $file = self::detectNameFile($name, __FUNCTION__);

        Component::load($file);
    }
    public static function footer($name = null)
    {
        $name = (string) $name;
        $file = self::detectNameFile($name, __FUNCTION__);

        Component::load($file);
    }
    public static function sidebar($name = null)
    {
        $name = (string) $name;
        $file = self::detectNameFile($name, __FUNCTION__);

        Component::load($file);
    }
    public static function block(string $name = null, array $data=[])
    {
        $name = (string) $name;
        if ($name !== '') {
            Component::load($name, $data);
        }
    }
    /**
     * title
     */
    public static function title()
    {
        return Setting::get('name_site');
    }

    public static function description()
    {
        return Setting::get('description');
    }
    private static function detectNameFile($name, $function)
    {
        return empty(trim($name)) ? $function : sprintf(self::RULES_NAME_FILE[$function], $name);
    }
    public static function getData() 
    {
        return static::$data;
    }
    public static function setData($data) 
    {
        static::$data = $data;
    }
    public static function getThemePath()
    {
<<<<<<< HEAD
        return ROOT_DIR . '/content/themes/default';
=======
        return ROOT_DIR . '/content/themes/default/';
>>>>>>> origin
    }
}
?>