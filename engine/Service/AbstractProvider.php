<?php 
namespace Engine\Service;

use Engine\DI\DI;

/**
 * Абстрактный класс для провайдеров сервисов
 */
abstract class AbstractProvider
{
    /**
     * @var DI
     */
    protected DI $di;

    /**
     * Конструктор класса
     *
     * @param DI $di
     */
    public function __construct(DI $di)
    {
        $this->di = $di;
    }

    /**
     * Инициализация провайдера
     *
     * @return mixed
     */
    abstract function init();
}