<?php

namespace App\Controllers;

use Framework\View;

class WishlistController extends Controller
{
    public function actionWishlist(): void
    {
        View::render('template.php', 'wishlist.php');
    }
}