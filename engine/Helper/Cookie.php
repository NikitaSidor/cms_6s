<?php 
namespace Engine\Helper;

/**
 * Класс для работы с куками
 */
class Cookie
{
    /**
     * Устанавливает куку
     *
     * @param string $key - ключ куки
     * @param string $value - значение куки
     * @param int $time - время жизни куки в секундах (по умолчанию 1 год)
     * @return void
     */
    public static function set(string $key, string $value, int $time = 31536000):void 
    {
        setcookie($key, $value, time() + $time, '/');
    }

    /**
     * Получает значение куки по ключу
     *
     * @param string $key - ключ куки
     * @return string|null - значение куки или null, если куки с таким ключом не существует
     */
    public static function get(string $key)
    {
        if (isset($_COOKIE[$key])) {
            return $_COOKIE[$key];
        }
        return null;
    }

    /**
     * Удаляет куку по ключу
     *
     * @param string $key - ключ куки
     * @return void
     */
    public static function del(string $key):void {
        if (isset($_COOKIE[$key])) {
            self::set($key, '', -3600); // устанавливаем время жизни куки в прошлое, чтобы она удалилась
            unset($_COOKIE[$key]); // удаляем куку из массива $_COOKIE
        }
    }
}
?>