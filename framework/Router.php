<?php

namespace Framework;

/**
 * Router
 */
class Router
{
    /**
     * @var array|mixed
     */
    protected array $routes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->routes = include(ROUTES_PATH);
    }

    /**
     * @return string|null
     */
    private static function getUri(): ?string
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
        return null;
    }

    /**
     * @return void
     */
    public function run(): void
    {
        $uri = self::getUri();
        foreach ($this->routes as $route => $controllerSegments) {
            if (preg_match("~^$route$~", $uri)) {
                $controllerName = array_shift($controllerSegments);
                $actionName = 'action' . ucfirst($route);
                $controllerObject = new $controllerName();
                $result = $controllerObject->$actionName();
                if ($result !== null) {
                    break;
                }
            }
        }
    }
}
