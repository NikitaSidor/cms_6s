<?php
namespace Engine\Core\Database;

use ReflectionClass;
use ReflectionProperty;

/**
 * Trait ActiveRecord
 * Предоставляет базовые методы для работы с базой данных через модель.
 */
trait ActiveRecord
{
    /**
     * @var object $db Объект базы данных.
     */
    protected $db;

    /**
     * @var QueryBuilder $queryBuilder Объект построителя запросов.
     */
    protected QueryBuilder $queryBuilder;

    /**
     * Конструктор класса.
     * @param int $id Идентификатор записи в таблице.
     */
    public function __construct($id = 0)
    {
        global $di;
        
        $this->db = $di->get('db');
        $this->queryBuilder = new QueryBuilder;

        if($id) {
            $this->setId($id);
        }
    }

    /**
     * Получает имя таблицы.
     * @return string Имя таблицы.
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * Сохраняет данные в базу данных.
     */
    public function save() {
        $properties = $this->getIssetProperties();

        try {
            if (isset($this->id)) {
                $this->db->execute(
                    $this->queryBuilder
                        ->update($this->getTable())
                        ->set($properties)
                        ->where('id', $this->id)
                        ->sql(),
                    $this->queryBuilder->values
                );
            } else {
                $this->db->execute(
                    $this->queryBuilder
                        ->insert($this->getTable())
                        ->set($properties)
                        ->sql(),
                    $this->queryBuilder->values
                );
            }
            return $this->db->lastInsertId();
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Получает массив свойств объекта, которые имеют значение.
     * @return array Массив свойств объекта.
     */
    private function getIssetProperties():array
    {
        $properties = [];
        
        foreach ($this->getProperties() as $key => $property) {
            if (isset($this->{$property->getName()})) {
                $properties[$property->getName()] = $this->{ $property->getName() };
            }
        }
        return $properties;
    }

    /**
     * Получает массив свойств объекта.
     * @return array Массив свойств объекта.
     */
    private function getProperties(): array
    {
        $reflection = new ReflectionClass($this);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
        return $properties;
    }
}