<?php 
namespace Engine;

use Engine\DI\DI;

class Load
{
    // Константы класса
    const MASK_MODEL_ENTITY = '\%s\Model\%s\%s';
    const MASK_MODEL_REPOSITORY = '\%s\Model\%s\%sRepository';
    const FILE_MASK_LANGUAGE = 'Language/%s/%s.ini';

    // Свойство класса
    public $di;
    
    // Конструктор класса
    public function __construct(DI $di) {
        $this->di = $di;
    }

    // Метод для загрузки модели
    public function model($modelName, $modelDir = false)
    {
        // Приводим имя модели к виду с заглавной буквы
        $modelName = ucfirst($modelName);
        // Если не указана директория модели, то используем имя модели
        $modelDir = $modelDir ? $modelDir : $modelName;
        
        // Формируем пространство имен модели
        $namespaceModel = sprintf(
            self::MASK_MODEL_REPOSITORY,
            ENV, $modelDir, $modelName
        );
        
        // Проверяем, существует ли класс модели
        $isClassExists = class_exists($namespaceModel);
        
        if ($isClassExists) {
            // Если класс модели существует, то создаем объект модели и добавляем его в DI контейнер
            $modelRegistry = $this->di->get('model') ?: new \stdClass();
            $modelRegistry->{lcfirst($modelName)} = new $namespaceModel($this->di);

            $this->di->set('model', $modelRegistry);
        }

        return $isClassExists;
    }

    // Метод для загрузки языковых файлов
    public function language(string $path, string $name = null)
    {
        // Формируем путь к языковому файлу
        $file = sprintf(
            self::FILE_MASK_LANGUAGE,
            'english', $path
        );

        // Если файл существует, то парсим его содержимое и добавляем в DI контейнер
        file_exists($file) ? 
            $content = parse_ini_file($file, true):
            print_r('Error load language: '.$file);
        
        $languageName = empty($name) ? $this->toCamelCase($path) : $this->toCamelCase($name);

        $language = $this->di->get('language') ?: new \stdClass();
        $language->{$languageName} = $content;
        $this->di->set('language', $language);

        return $content;
    }

    // Метод для преобразования строки в CamelCase
    private function toCamelCase(string $str) {
        $replace = preg_replace('/[^a-zA-z0-9]/', ' ', $str);
        $convert = mb_convert_case($replace, MB_CASE_TITLE);
        $result = lcfirst(str_replace(' ', '', $convert));

        return $result;
    }
}
?>