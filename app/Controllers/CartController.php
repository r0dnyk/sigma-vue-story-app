<?php

namespace App\Controllers;

use Framework\View;

class CartController extends Controller
{
    public function actionCart(): bool
    {
//        View::render('template.php', 'cart.php');
        echo "CartController => actionCart";
        return true;
    }
}
