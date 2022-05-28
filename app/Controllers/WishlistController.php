<?php

namespace App\Controllers;

use Framework\View;

class WishlistController extends Controller
{
    public function actionWishlist(): bool
    {
//        View::render('template.php', 'wishlist.php');
        echo "WishlistController => actionWishlist";
        return true;
    }
}