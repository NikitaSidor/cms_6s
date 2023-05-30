<?php 
namespace Engine\Helper;

/**
 * Класс Common содержит набор статических методов для работы с HTTP-запросами.
 */
class Common
{
    /**
     * Проверяет, был ли отправлен HTTP-запрос методом POST.
     * @return bool true, если запрос был отправлен методом POST, иначе false.
     */
    public static function isPost(): bool
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            return true;
        }
        return false;
    }

    /**
     * Возвращает метод HTTP-запроса.
     * @return string Метод HTTP-запроса.
     */
    public static function getMethod(): string
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    /**
     * Возвращает URL-адрес запрошенной страницы.
     * @return string URL-адрес запрошенной страницы.
     */
    public static function getPathUrl(): string
    {
        $pathUrl = $_SERVER['REQUEST_URI'];
        if ($position = strpos($pathUrl, '?')) {
            $pathUrl = substr($pathUrl, 0, $position);
        }
        return $pathUrl;
    }
}