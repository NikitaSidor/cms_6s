<?php
namespace Engine;

use Engine\DI\DI;
use Engine\Core\Database\QueryBuilder;

/**
 * Абстрактный класс модели
 */
abstract class Model
{
    /**
     * @var DI $di объект DI контейнера
     */
    protected DI $di;

    /**
     * @var mixed $db объект базы данных
     */
    protected $db;

    /**
     * @var mixed $config объект конфигурации
     */
    protected $config;

    /**
     * @var QueryBuilder $queryBuilder объект построителя запросов
     */
    public QueryBuilder $queryBuilder;

    /**
     * Конструктор модели
     *
     * @param DI $di объект DI контейнера
     */
    public function __construct(DI $di)
    {
        $this->di = $di;
        $this->db = $this->di->get('db');
        $this->config = $this->di->get('config');

        $this->queryBuilder = new QueryBuilder();
    }
}