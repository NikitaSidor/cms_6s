<?php 
namespace Engine;

use Engine\DI\DI;

class Load
{
    const MASK_MODEL_ENTITY = '\%s\Model\%s\%s';
    const MASK_MODEL_REPOSITORY = '\%s\Model\%s\%sRepository';
    public $di;
    
    public function __construct(DI $di) {
        $this->di = $di;
    }

    public function model($modelName, $modelDir = false)
    {
        $modelName = ucfirst($modelName);
        $modelDir = $modelDir ? $modelDir : $modelName;
        
        

        $namespaceModel = sprintf(
            self::MASK_MODEL_REPOSITORY,
            ENV, $modelDir, $modelName
        );
        
        $isClassExists = class_exists($namespaceModel);
        
        if ($isClassExists) {
            // Set to DI
            $modelRegistry = $this->di->get('model')?: new \stdClass();
            $modelRegistry->{lcfirst($modelName)} = new $namespaceModel($this->di);

            $this->di->set('model', $modelRegistry);
        }

        return $isClassExists;
    }
}
?>