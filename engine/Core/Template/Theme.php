<?php 
namespace Engine\Core\Template;

class Theme
{
    const RULES_NAME_FILE = [
        'header' => 'header-%s',
        'footer' => 'footer-%s',
        'sidebar' => 'sidebar-%s',
    ];
    public $url = '';
    protected $data = [];
    /**
     * Summary of header
     * @param mixed $name
     * @return void
     */
    public function header($name = null)
    {
        $name = (string) $name;
        $file = 'header';
        if ($name !== '') {
            $file = sprintf(self::RULES_NAME_FILE['header'], $name);
        } else {
            $file = 'header';
        }
        $this->loadTemplateFile($file);
    }
    public function footer($name = null)
    {
        $name = (string) $name;
        $file = 'footer';
        if ($name !== '') {
            $file = sprintf(self::RULES_NAME_FILE['footer'], $name);
        } else {
            $file = 'footer';
        }
        $this->loadTemplateFile($file);
    }
    public function sidebar($name = null)
    {
        $name = (string) $name;
        $file = 'sidebar';
        if ($name !== '') {
            $file = sprintf(self::RULES_NAME_FILE['sidebar'], $name);
        } else {
            $file = 'sidebar';
        }
        $this->loadTemplateFile($file);
    }
    public function block(string $name = null, array $data=[])
    {
        $name = (string) $name;
        if ($name !== '') {
            $this->loadTemplateFile($name, $data);
        }
    }
    /**
     * Summary of loadTemplateFile
     * @param mixed $nameFile
     * @param mixed $data
     * @throws \Exception
     * @return void
     */
    private function loadTemplateFile(string $nameFile, array $data = [])
    {
        $templateFile = ROOT_DIR . '/content/themes/default/'.$nameFile.'.php';
        if(is_file($templateFile)) {
            extract($data);
            require_once $templateFile;
        } else {
            throw new \Exception(
                sprintf('View file %s does not exist!', $templateFile)
            );
        }
    }
    public function getData() 
    {
        return $this->data;
    }
    public function setData($data) 
    {
        $this->data = $data;
    }
}
?>