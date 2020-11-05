<?php

namespace App\Repositories;

use App\Models\Stock;
use App\Services\GetStockService;
use App\Services\InsertStockService;
use App\Services\UpdateStockService;

class QueryRepository
{
    public function getById(int $id): Stock
    {
        return (new GetStockService)->getById($id);
    }

    public function insert(Stock $stock): void
    {
        InsertStockService::execute($stock);
    }

    public function update(Stock $stock): void
    {
        UpdateStockService::execute($stock);
    }
}
