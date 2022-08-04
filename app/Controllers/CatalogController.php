<?php

namespace App\Controllers;

use App\Models\ProductModel;
use Framework\View;
use JsonException;

class CatalogController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->model = new ProductModel();
    }


    /**
     * @throws JsonException
     */
    public function actionCatalog(): void
    {
        $catalog = $this->model->getCatalog();
        View::render('template.php', 'catalog.php', $catalog);
        $fp = fopen(APP_FRAMEWORK . 'db.json', 'w');

        fwrite($fp, '{ "products" :');
        fwrite($fp, json_encode($catalog, JSON_THROW_ON_ERROR));
        fwrite($fp, '}');
        fclose($fp);
    }
}
