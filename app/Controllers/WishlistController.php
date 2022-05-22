<?php

namespace App\Controllers;

use Framework\View;

class WishlistController extends Controller
{
    public function actionCatalog(): void
    {
        View::render('template.php', 'wishlist.php');
    }
}