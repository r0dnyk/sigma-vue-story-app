<?php

namespace Framework;

use App\Controllers\CatalogController;
use App\Controllers\CartController;
use App\Controllers\WishlistController;


/**
 *
 */
class Router
{
    /**
     * @return void
     */
    public static function run(): void
    {
        $uri = self::getUri();
        $map = self::getRoutes();
        self::getController($map, $uri);
    }

    /**
     * @return string[][]
     */
    private static function getRoutes(): array
    {
        return array(
            'catalog' => [CatalogController::class, 'catalog'],
            'cart' => [CartController::class, 'cart'],
            'wishlist' => [WishlistController::class, 'wishlist'],
        );
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
     * @param array $map
     * @param string|null $uri
     * @return void
     */
    private static function getController(array $map, ?string $uri): void
    {
        foreach ($map as $route => $controllers) {
            if (preg_match("~^$route$~", $uri)) {
                $controllerName = array_shift($controllers);
                $controllerAction = array_pop($controllers);
                $controller = new $controllerName();
                $controller->$controllerAction();
            }
        }
    }
}

