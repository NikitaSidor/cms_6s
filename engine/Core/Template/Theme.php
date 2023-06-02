<?php 
namespace Engine\Core\Template;

class Theme
{
    const RULES_NAME_FILE = [
        'header' => 'header-%s',
        'footer' => 'footer-%s',
        'sidebar' => 'sidebar-%s',
    ];
    protected static string $url = '';
    protected static array $data = [];
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
}
?>