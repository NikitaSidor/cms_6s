<?php 
namespace Engine\Core\Template;

use Exception;

class Component
{
    public static function load($name, array $data = [])
    {
        $templateFile = ROOT_DIR . '/content/themes/default/' . $name . '.php';

        if (ENV == 'Admin') {
            $templateFile = path('view') . '/' . $name . '.php';
        }

        if (is_file($templateFile)) {
            extract(array_merge($data, Theme::getData()));
            require_once $templateFile;
        } else {
            throw new Exception(
                sprintf('View file %s does not exist!', $templateFile)
            );
        }
    }
}