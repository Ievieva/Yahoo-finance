<?php

namespace App\Services;

use App\Models\Stock;
use App\Services\GetStockFromApiService;
use App\Repositories\StockRepository;
use Carbon\Carbon;

class GetStockService
{
    public function getById(string $id): ?Stock
    {
        $stock = (new StockRepository())->getById($id);

        if (! isset($stock)) {
            $apiStock = (new GetStockFromApiService())->getById($id);
            if (isset($apiStock)) {
                StockRepository::store($apiStock);
                $stock = (new StockRepository())->getById($id);
            }
        } elseif (Carbon::now()->diffInMinutes($stock->createdAt()) > 10) {
            $apiStock = (new GetStockFromApiService())->getById($id);
            StockRepository::update($apiStock);
            $stock = (new StockRepository())->getById($id);
        }

        return $stock;
    }
}
