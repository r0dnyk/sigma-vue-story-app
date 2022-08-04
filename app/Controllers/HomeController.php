<?php

namespace App\Controllers;

use Framework\View;

class HomeController extends Controller
{
    public function actionHome(): void
    {
        View::render('template.php', 'home.php');
    }
}
