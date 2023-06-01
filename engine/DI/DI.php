<?php

namespace Engine\DI;

/**
 * Класс DI (Dependency Injection) для управления зависимостями
 */
class DI 
{
    /**
     * @var array Массив зависимостей
     */
    private array $container = [];

    /**
     * Получение зависимости по ключу
     *
     * @param string $key Ключ зависимости
     * @return mixed|null Значение зависимости или null, если зависимость не найдена
     */
    public function get(string $key)
    {
        return $this->has($key);
    }

    /**
     * Установка зависимости
     *
     * @param string $key Ключ зависимости
     * @param mixed $value Значение зависимости
     * @return self
     */
    public function set(string $key, $value): self
    {
        $this->container[$key] = $value;
        return $this;
    }

    /**
     * Проверка наличия зависимости по ключу
     *
     * @param string $key Ключ зависимости
     * @return mixed|null Значение зависимости или null, если зависимость не найдена
     */
    public function has(string $key)
    {
        return isset($this->container[$key]) ? $this->container[$key] : null;
    }

    public function push($key, array $elems = []):void 
    {
        if ($this->has($key) !== null) {
            $this->set($key, []);
        }
        
        if (!empty($elems)) {
            $this->container[$key][$elems['key']] = $elems['value'];
        }
    }
}