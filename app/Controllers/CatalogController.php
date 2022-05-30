<?php

namespace App\Controllers;

use Framework\View;

class CatalogController extends Controller
{
    public function actionCatalog(): void
    {
        View::render('template.php', 'catalog.php');
    }
}