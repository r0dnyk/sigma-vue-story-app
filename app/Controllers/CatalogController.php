<?php

namespace App\Controllers;

use Framework\View;

class CatalogController extends Controller
{
    public function actionCatalog(): bool
    {
//        View::render('template.php', 'catalog.php');
        echo "CatalogController => actionCatalog";
        return true;
    }
}