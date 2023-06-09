<?php 
namespace Engine\Core\Router;

class UrlDispatcher
{
    private $method = [
        "GET",
        "POST"
    ];
    private $routes = [
        'GET' => [],
        'POST' => []
    ];
    private $patterns = [
        'int' => '[0-9]+',
        'str' => '[a-zA-Z\.\-_%]+',
        'any' => '[a-zA-Z0-9\.\-_%]+'
    ];
    /**
     * Summary of addPattern
     * @param mixed $key
     * @param mixed $pattern
     * @return void
     */
    public function addPattern($key, $pattern) {
        $this->patterns[$key] = $pattern;
    }
    private function routes($method)
    {
        return isset($this->routes[$method]) ? $this->routes[$method] : [];
    }
    public function dispatch($method, $uri) {
        $routes = $this->routes(strtoupper($method));
        if (array_key_exists($uri, $routes)) {
            return new DispathedRoute($routes[$uri]);
        }
        return $this->doDispatch($method, $uri);
    }
    private function doDispatch($method, $uri) {
        foreach ($this->routes(strtoupper($method)) as $route => $controller) {
            $pattern = '#^' . $route .'$#s';
            if (preg_match($pattern, $uri, $parameters)) {
                return new DispathedRoute($controller, $this->processParam($parameters));
            }
        }
    }
    public function register($method, $pattern, $controller)
    {
        $convert = $this->contvertPattern($pattern);
        $this->routes[strtoupper($method)][$convert] = $controller;
    }
    private function contvertPattern($pattern)
    {
        if(strpos($pattern, '(') === false) {
            return $pattern;
        }

        return preg_replace_callback('#\((\w+):(\w+)\)#', [$this, 'replacePattern'], $pattern);
    }
    private function replacePattern($matches)
    {
        return '(?<' .$matches[1]. '>' . strtr($matches[2], $this->patterns) . ')';
    }
    private function processParam($parameters) 
    {
        foreach($parameters as $key => $value) {
            if(is_int($key)) {
                unset($parameters[$key]);
            }
        }

        return $parameters;
    }
}
?>