<?php

namespace App\Controllers;

use App\Models\ProductModel;
use Framework\View;

class CatalogController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->model = new ProductModel();
    }


    public function actionCatalog(): array
    {
        $catalog = $this->model->getCatalog();
        View::render('template.php', 'catalog.php', $catalog);
        return $catalog;
    }
}
