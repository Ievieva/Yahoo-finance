<?php

namespace App\Controllers;

use App\Repositories\YahooRepository;
use App\Services\GetStockService;
use App\Services\InsertStockService;
use App\Services\UpdateStockService;
use Carbon\Carbon;
use Scheb\YahooFinanceApi\ApiClient;
use Scheb\YahooFinanceApi\ApiClientFactory;

class YahooController
{
    public function index()
    {
        return require_once __DIR__ . '/../Views/IndexView.php';
    }

    public function show()
    {
        $id = $_POST['id'];
        $stock = (new GetStockService)->getById($id);

        if (!isset($stock)) {
            $yahooStock = YahooRepository::getById($id);
            if (isset($yahooStock)) {
                InsertStockService::execute($yahooStock);
                $stock = (new GetStockService)->getById($id);
            }
        } elseif (Carbon::now()->diffInMinutes($stock->createdAt()) > 10) {
            $yahooStock = YahooRepository::getById($id);
            UpdateStockService::execute($yahooStock);
            $stock = (new GetStockService)->getById($id);
        }
        return require_once __DIR__ . '/../Views/StockDataView.php';
    }
}
