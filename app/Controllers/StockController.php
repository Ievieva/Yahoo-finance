<?php

namespace App\Controllers;

use App\Services\GetStockService;


class StockController
{
    public function index()
    {
        return require_once __DIR__ . '/../Views/IndexView.php';
    }

    public function show()
    {
        $id = $_POST['id'];
        $stock = (new GetStockService)->getById($id);

        return require_once __DIR__ . '/../Views/StockDataView.php';
    }
}
