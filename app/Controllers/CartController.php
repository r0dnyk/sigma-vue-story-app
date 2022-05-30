<?php

namespace App\Controllers;

use Framework\View;

class CartController extends Controller
{
    public function actionCart(): void
    {
        View::render('template.php', 'cart.php');
    }
}
