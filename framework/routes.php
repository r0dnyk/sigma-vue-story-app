<?php

/**
 * Contains an array of possible routes and actions.
 */

use App\Controllers\CartController;
use App\Controllers\CatalogController;
use App\Controllers\HomeController;
use App\Controllers\WishlistController;

return [
    '' => [HomeController::class, 'home'],
    'catalog' => [CatalogController::class, 'catalog'],
    'cart' => [CartController::class, 'cart'],
    'wishlist' => [WishlistController::class, 'wishlist'],
];
